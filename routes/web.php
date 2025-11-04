<?php

use App\Http\Controllers\ServiceController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;
Route::get('/', function () {
    return view('welcome');
});

Route::resource('users', UserController::class);
Route::resource('services',ServiceController::class);
