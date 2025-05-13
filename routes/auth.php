<?php

use App\Http\Controllers\Auth\AuthController;
use Illuminate\Support\Facades\Route;

// Home Routes
Route::name('auth.')->prefix(LaravelLocalization::setLocale())->middleware('localeSessionRedirect','localizationRedirect','localeViewPath')->group(function () {
    // login to panel
    Route::get('/auth', [AuthController::class , 'index'])->name('index');
});
