'<?php

use App\Http\Controllers\PhotoController;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::post('/scan/sendData', [Controller::class, 'scan']);

Route::get('/success', function () {
    return view('content.success');
})->name('success');

Route::get('/', function () {
    if (Auth::check() && Auth::user()->role == 'admin') {
        return redirect('/admin');
    } else if (Auth::check() && Auth::user()->role == 'user') {
        return redirect('/home');
    } else {
        return view('index');
    }
})->name('/');


Route::get('/login', function () {
    return view('components.login');
})->name('login');

Route::get('/logout', [Controller::class, 'logout'])->name('logout');

Route::post('/auth', [Controller::class, 'auth'])->name('auth');
Route::post("/daftar", [Controller::class, 'store'])->name('daftar');

Route::get("/verification", function () {
    return view('content.Client.verification');
});


Route::middleware(['CekRole:admin'])->group(function () {
    Route::get('/admin', [Controller::class, 'getDataNonVerified'])->name('admin');
    Route::get('/verified', [Controller::class, 'getDataVerified'])->name('verified');
    Route::post('/mail', [Controller::class, 'mail'])->name('mail');
    Route::post("/mail.send", [Controller::class, 'sendMail'])->name('mail.send');
    Route::get('/delete/{id}', [Controller::class, 'deleteData'])->name('delete');
});

Route::middleware(['CekRole:user'])->group(function () {
    Route::get('/home', function () {
        return view('index');
    })->name('home');
});
