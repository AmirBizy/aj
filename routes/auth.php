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

        Livewire::setUpdateRoute(function ($handle) {
            return Route::post('/livewire/update', $handle);
        });

        Route::get('/auth', [AuthController::class , 'index'])->middleware('guest')->name('login');
        Route::post('/logout', [AuthController::class , 'logout'])->middleware('auth')->name('logout');
    }
);
// Auth Routes
