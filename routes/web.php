<?php

use App\Http\Controllers\Home\HomeController;
use Illuminate\Support\Facades\Route;

// Home Routes
Route::name('home.')->prefix(LaravelLocalization::setLocale())->middleware('localeSessionRedirect','localizationRedirect','localeViewPath')->group(function () {

    // index & home
    Route::get('/', [HomeController::class , 'index'])->name('index');

    // about me
    Route::get('/about-me', [HomeController::class , 'about'])->name('about');

    // services
    Route::get('/services', [HomeController::class , 'services'])->name('services');

    // works
    Route::get('/works', [HomeController::class , 'works'])->name('works');

    // contact
    Route::get('/contact', [HomeController::class , 'contact'])->name('contact');
});
