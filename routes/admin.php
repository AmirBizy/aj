<?php

use App\Http\Controllers\Admin\AboutMeController;
use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\Admin\SettingController;
use App\Http\Controllers\Admin\AccountController;
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

        // admin panel index page
        Route::get('/', [AdminController::class , 'index'])->name('index');

        // about me
        Route::get('/about-me', [AboutMeController::class , 'index'])->name('about_me.index');
        Route::patch('/about-me/update', [AboutMeController::class , 'update'])->name('about_me.update');

        // setting
        Route::get('/setting', [SettingController::class , 'index'])->name('setting.index');
        Route::patch('/setting/update', [SettingController::class , 'update'])->name('setting.update');

        // setting
        Route::get('/account', [AccountController::class , 'index'])->name('account.index');
        Route::patch('/account/update', [AccountController::class , 'update'])->name('account.update');
    }
);
// Admin Routes
