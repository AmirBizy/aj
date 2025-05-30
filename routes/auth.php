<?php

use App\Http\Controllers\Auth\AuthController;
use Illuminate\Support\Facades\Route;

// Auth Routes
Route::group(
    [
        'prefix' => LaravelLocalization::setLocale(),
        'middleware' => ['localeSessionRedirect', 'localizationRedirect', 'localeViewPath'],
    ],
    function () {

        // change update route livewire for multi language
        Livewire::setUpdateRoute(function ($handle) {
            return Route::post('/livewire/update', $handle);
        });

        // auth
        Route::get('/auth', [AuthController::class , 'index'])->middleware('guest')->name('login');
        Route::get('/auth/google', [AuthController::class , 'google'])->middleware('guest')->name('auth.google');
        Route::get('/auth/google/callback', [AuthController::class , 'google_callback'])->middleware('guest')->name('auth.google.callback');
        Route::post('/logout', [AuthController::class , 'logout'])->middleware('auth')->name('logout');
    }
);
// Auth Routes
