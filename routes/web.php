<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BukuController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\AnggotaController;
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

Route::middleware(['auth'])->group(function () {
    
    Route::get('/dashboard', function () {
        return view('pages.dashboard');
    });
    
    
    Route::get('/peminjaman', function (){
        return view('pages.peminjaman');
    });
    Route::resource('buku', BukuController::class);
    Route::resource('anggota', AnggotaController::class);
    Route::get('logout', [LoginController::class, 'logout'])->name('logout');
});

Route::middleware(['guest'])->group(function () {
    
    Route::get('/', [LoginController::class, 'index']);
    Route::post('/', [LoginController::class, 'authenticate'])->name('login');
    
    Route::get('/register', [RegisterController::class, 'index']);
    Route::post('/register', [RegisterController::class, 'store'])->name('register');
});





