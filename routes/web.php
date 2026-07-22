<?php

use App\Http\Controllers\AuthController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
})->name('home');

Route::middleware('guest')->group(function () {
    Route::get('/register', [AuthController::class, 'showRegisterForm'])->name('register');
    Route::post('/register', [AuthController::class, 'register'])->name('register.submit');
    Route::get('/login', [AuthController::class, 'showLoginForm'])->name('login');
    Route::post('/login', [AuthController::class, 'login'])->name('login.submit');
});

Route::middleware('auth')->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
    Route::get('/data-booking', function () {
        return view('data-booking');
    })->name('data-booking');
    Route::get('/dokter-berhalangan', function () {
        return view('dokter-berhalangan');
    })->name('dokter-berhalangan');
    Route::get('/monitoring-notifikasi', function () {
        return view('monitoring-notifikasi');
    })->name('monitoring-notifikasi');
    Route::post('/logout', [AuthController::class, 'logout'])->name('logout');
});

