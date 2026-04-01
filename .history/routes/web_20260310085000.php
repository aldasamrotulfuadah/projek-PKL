<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\SuratKeluarController;
use App\Http\Controllers\SuratMasukController;
use Illuminate\Support\Facades\Route;




Route::get('/', function () {
    return view('welcome');
})->name('welcome');
// Login
Route::get('/login', [AuthController::class, 'login'])->name('login');
Route::post('/login', [AuthController::class, 'loginProses'])->name('loginProses');

//user
Route::get('/user', [AuthController::class, 'use'])->name('login');

// Logout
Route::get('/logout', [AuthController::class, 'logout'])->name('logout');

Route::middleware('checkLogin')->group(function(){
    // Dashboard
    Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');
    // Surat Masuk
    Route::get('/suratmasuk', [SuratMasukController::class, 'index'])->name('suratmasuk');
    // Surat Keluar
    Route::get('/suratkeluar', [SuratKeluarController::class, 'index'])->name('suratkeluar');

});


