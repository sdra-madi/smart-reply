<?php

use App\Http\Controllers\FacebookController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});
Route::get('redirect/facebook', [FacebookController::class, 'RedirectToFacebook']);
Route::get('callback/facebook', [FacebookController::class, 'HandleCallback']);