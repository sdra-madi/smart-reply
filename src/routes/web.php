<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\StatticController;

Route::get('/', [StatticController::class, 'index']);
