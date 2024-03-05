<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;

class PhotoController extends Controller
{
    public function savePhoto(Request $request)
    {
        $base64Image = $request->input('image');
        $image = base64_decode(preg_replace('#^data:image/\w+;base64,#i', '', $base64Image));

        $filename = 'foto_pendaftaran_' . time() . '.png';

        File::put(public_path('foto/' . $filename), $image);

        return response()->json(['success' => true, 'message' => 'Foto berhasil disimpan.']);
    }
}
