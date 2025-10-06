<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\UserController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
*/

// Halaman utama langsung ke list user
Route::get('/', [UserController::class, 'index']);

// Jika ingin route profile aktif
// Route::get('/profile', [ProfileController::class, 'profile']);

// Route untuk halaman form tambah user
Route::get('/user/create', [UserController::class, 'create'])->name('user.create');

// Route untuk menyimpan data user
Route::post('/user', [UserController::class, 'store'])->name('user.store');
