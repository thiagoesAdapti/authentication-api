<?php

use App\Http\Controllers\Api\Auth\LoginController;
use App\Http\Controllers\Api\Auth\LogoutController;
use App\Http\Controllers\Api\Auth\ProfileController;
use App\Http\Controllers\Api\Auth\RegisterController;
use Illuminate\Support\Facades\Route;

Route::prefix('/auth')->name('auth.')->group(function () {
    Route::post('/register', RegisterController::class)->name('register');
    Route::post('/login', LoginController::class)->name('login');

    Route::middleware('auth:sanctum')->group(function () {
        Route::post('/logout', LogoutController::class)->name('logout');
        Route::get('/profile', ProfileController::class)->name('profile');
    });
});