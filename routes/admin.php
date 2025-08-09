<?php

use App\Http\Controllers\Admin\AboutMeController;
use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\Admin\SettingController;
use App\Http\Controllers\Admin\AccountController;
use App\Http\Controllers\Admin\CompanyController;
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

        // companies
        Route::get('/companies', [CompanyController::class , 'index'])->name('companies.index');
        Route::get('/companies/create', [CompanyController::class , 'create'])->name('companies.create');
        Route::post('/companies/store', [CompanyController::class , 'store'])->name('companies.store');
        Route::get('/companies/edit/{id}', [CompanyController::class , 'edit'])->name('companies.edit');
        Route::patch('/companies/update/{id}', [CompanyController::class , 'update'])->name('companies.update');
        Route::delete('/companies/delete/{id}', [CompanyController::class , 'delete'])->name('companies.delete');
    }
);
// Admin Routes
