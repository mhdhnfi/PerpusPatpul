<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BukuController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\Hash;



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

Route::get('/peminjaman', function (){
    return view('pages.peminjaman');
});

Route::get('/', [LoginController::class, 'index']);
Route::post('/', [LoginController::class, 'authenticate'])->name('login');

Route::get('/register', [RegisterController::class, 'index']);
Route::post('/register', [RegisterController::class, 'store'])->name('register');


Route::resource('buku', BukuController::class);

