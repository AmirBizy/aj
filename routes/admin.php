<?php

use App\Http\Controllers\Admin\AdminController;
use Illuminate\Support\Facades\Route;

// Admin Routes
Route::group(
    [
        'prefix' => LaravelLocalization::setLocale() . '/admin',
        'middleware' => ['localeSessionRedirect', 'localizationRedirect', 'localeViewPath', 'auth'],
    ],
    function () {

        Livewire::setUpdateRoute(function ($handle) {
            return Route::post('/livewire/update', $handle);
        });

        Route::get('/', [AdminController::class , 'index'])->name('index');
    }
);
// Admin Routes
