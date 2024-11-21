<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\portal\auth\LoginController;
use App\Http\Controllers\portal\auth\RegisterController;


use App\Http\Controllers\portal\auth\VerificationController;
use App\Http\Controllers\portal\facebook\FacebookController;
use App\Http\Controllers\portal\auth\PasswordResetController;
use App\Http\Controllers\portal\facebook\FacebookIndexController;

Route::get('/welcome', function () {
    return view('welcome');
});
Route::get('/', function () {
    return view('portal.pages.homePage');
})->name('home');

// Registration and Login Routes
Route::middleware('guest')->group(function () {
    Route::get('/register', [RegisterController::class, 'showRegisterForm'])->name('register');
    Route::post('/register', [RegisterController::class, 'store'])->name('store');
    Route::get('/login', [LoginController::class, 'showLoginForm'])->name('login');
    Route::post('/login', [LoginController::class, 'login']);
});

// Email Verification Routes and logout
Route::prefix('email')->middleware('auth')->group(function () {
    Route::get('/verify', [VerificationController::class, 'showVerificationForm'])->name('verification.notice');
    Route::get('/verify/{id}/{hash}', [VerificationController::class, 'verify'])->middleware(['signed'])->name('verification.verify');
    Route::post('/resend', [VerificationController::class, 'resend'])->middleware(['throttle:6,1'])->name('verification.resend');
    Route::post('/logout', [RegisterController::class, 'logout'])->name('logout');
});

// Password Reset Routes
Route::middleware('guest')->group(function () {
    Route::get('/forgot-password', [PasswordResetController::class, 'requestForm'])->name('password.request');
    Route::post('/forgot-password', [PasswordResetController::class, 'sendResetLink'])->name('password.email');
    Route::get('/reset-password/{token}', [PasswordResetController::class, 'resetForm'])->name('password.reset');
    Route::post('/reset-password', [PasswordResetController::class, 'resetPassword'])->name('password.update');
});

Route::prefix('dashboard')->middleware(['auth', 'verified'])->group(function () {

    Route::get('/', function () {
        return view('dashboard.dashboard');
    })->name('dashboard');

    Route::get('/profile', function () {
        return view('dashboard.pages.profile');
    })->name('dashboard.profile');
});
Route::prefix('facebook')->middleware([])->group(function () {
    Route::get('/redirect', [FacebookController::class, 'RedirectToFacebook'])->name('facebook.redirect');
    Route::get('/callback', [FacebookController::class, 'HandleCallback']);
    Route::get('/index', [FacebookIndexController::class, 'index'])->name('facebook.index');
});
