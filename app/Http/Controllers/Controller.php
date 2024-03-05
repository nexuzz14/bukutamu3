<?php

namespace App\Http\Controllers;

use \App\Models\User;
use Illuminate\Support\Facades\Session;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Str;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    public function store(Request $request)
    {
	$base64Image = $request->input('image');
        $image = base64_decode(preg_replace('#^data:image/\w+;base64,#i', '', $base64Image));
        $filename = 'foto_'.Str::random(8) . '.png';
	File::put(public_path('storage/' . $filename), $image);
	$password = Str::random(8);
	$result = User::create([
            'nama' => $request->input('nama'),
            'institution' => $request->input('institution'),
            'phone_number' => $request->input('phone'),
            'email' => $request->input('email'),
            'keterangan' => $request->input('keterangan'),
            'image' => $filename,
            'password' => Hash::make($password),
        ]);
	if($result){
	Session::put('password', $password);
    Auth::attempt(['email' => $request->input('email'), 'password' => $password]);
	Mail::to($request->input('email'))->send(new \App\Mail\SendToken());
            return response()->json(['data' => $request->all()]);}
    }


    public function auth(Request $request)
    {
        $email = $request->input('email');
        $password = $request->input('token');

        if (Auth::attempt(['email' => $email, 'password' => $password])) {
            if (Auth::user()->role == 'admin') {
                return redirect()->route('admin');
            } else if (Auth::user()->role == 'user') {
                return redirect()->route('home');
            }
        } else {
            return redirect()->route('login')->withErrors(['email' => 'Wrong email or password']);
        }
    }

    public function logout()
    {
        Auth::logout();
        return redirect()->route('/');
    }

    public function getDataNonVerified()
    {
        $data = User::where('status', 'nonverified')->where('role', 'user')->get();
        return view('content.admin.admin', compact('data'));
    }

    public function getDataVerified()
    {
        $data = User::where('status', 'verified')->where('role', 'user')->get();
        return view('content.admin.verified', compact('data'));
    }

    public function mail(Request $request)
    {
        $email = $request->input('email');
        return view('content.admin.mail', [
            'email' => $email
        ]);
    }

    public function sendMail(Request $request)
    {
        $subject = $request->input('subject');
        $pesan = $request->input('pesan');

        $result = Mail::to($request->input('email'))->send(new \App\Mail\SendMessage($subject, $pesan));
        if ($result) {
            return redirect()->route('admin');
        }
    }

    public function deleteData($id)
    {
        User::where('id', $id)->delete();
        return redirect()->route('admin');
    }

    public function scan(Request $request)
    {
        $id = $request->input('id');

        $result = User::where('id', $id)->update([
            'status' => 'verified'
        ]);

        if ($result) {
            return response()->json(['status' => 'success', 'data' => $result]);
        }
    }
}
