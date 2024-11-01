<?php

use App\Http\Controllers\FacebookController;
use Illuminate\Support\Facades\Route;

Route::get('/welcome', function () {
    return view('welcome');
});

Route::get('/', function () {
    return view('portal.pages.homePage');
})->name('home');

Route::get('/team', function () {
    return view('portal.pages.teamPage');
})->name('team');

Route::get('/login', function () {
    return view('portal.pages.login');
})->name('login');

Route::get('/create', function () {
    return view('portal.pages.create');
})->name('create');

Route::get('/otp', function () {
    return view('portal.pages.otp');
})->name('otp');

Route::prefix('dashboard')->group(function () {

    Route::get('/', function () {
        return view('dashboard.dashboard');
    })->name('dashboard');

    Route::get('/profile', function () {
        return view('dashboard.pages.profile');
    })->name('profile');
    
    Route::get('/facebook', function () {
        return view('dashboard.pages.socialMedia.pageFacebook');
    })->name('Facebook');
    
    Route::get('/instagram', function () {
        return view('dashboard.pages.socialMedia.pageInstagram');
    })->name('instagram');
    
    Route::get('/products', function () {
        return view('dashboard.pages.products');
    })->name('products');
});
Route::get('redirect/facebook', [FacebookController::class, 'RedirectToFacebook']);
Route::get('callback/facebook', [FacebookController::class, 'HandleCallback']);