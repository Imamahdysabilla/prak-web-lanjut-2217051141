<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ProfileController;

Route::get('/', function () {
    return redirect('/user');
});

Route::get('/user', [UserController::class, 'index']);
Route::get('/user/create', [UserController::class, 'create'])->name('user.create');
Route::post('/user', [UserController::class, 'store'])->name('user.store');
Route::get('/user/profile/{id}', [UserController::class, 'profile'])->name('user.profile');
