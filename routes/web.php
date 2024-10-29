<?php

use App\Http\Controllers\FacebookController;
use Illuminate\Support\Facades\Route;

Route::get('/welcome', function () {
    return view('welcome');
});
Route::get('/', function () {
    return view('portal.pages.homePage');
});
Route::get('/team', function () {
    return view('portal.pages.teamPage');
});
Route::get('/login', function () {
    return view('portal.pages.login');
});
Route::get('/create', function () {
    return view('portal.pages.create');
});
Route::get('/otp', function () {
    return view('portal.pages.otp');
});
Route::get('/dashboard', function () {
    return view('dashboard.dashboard');
});
Route::get('redirect/facebook', [FacebookController::class, 'RedirectToFacebook']);
Route::get('callback/facebook', [FacebookController::class, 'HandleCallback']);