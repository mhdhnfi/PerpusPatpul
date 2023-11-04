<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BukuController;
use App\Http\Controllers\LoginController;



/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/dashboard', function () {
    return view('pages.dashboard');
});

Route::get('/anggota', function () {
    return view('pages.anggota');
});

Route::get('/peminjaman', function () {
    return view('pages.peminjaman');
});

Route::get('/', function () {
    return view('pages.login');
});

Route::get('/register', function () {
    return view('pages.register');
});

Route::resource('buku', BukuController::class);
Route::resource('login', LoginController::class);

