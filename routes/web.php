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
Route::prefix('dashboard')->group(function () {

    Route::get('/', function () {
        return view('dashboard.dashboard');
    })->name('dashboard.dashboarde');

    Route::get('/profile', function () {
        return view('dashboard.pages.profile');
    })->name('dashboard.pages.profile');

});
Route::get('redirect/facebook', [FacebookController::class, 'RedirectToFacebook']);
Route::get('callback/facebook', [FacebookController::class, 'HandleCallback']);