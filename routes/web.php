<?php

use App\Http\Controllers\Auth\RegisterController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\RegisterController as ControllersRegisterController;

Route::get('/', function () {
    return view('welcome');
})->middleware('auth');

Route::get('/login', [AuthController::class, 'login'])->name('login');

Route::get('/register', [ControllersRegisterController::class, 'showRegisterForm'])->name('register.form');
Route::post('/register', [ControllersRegisterController::class, 'register'])->name('register');