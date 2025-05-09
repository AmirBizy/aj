<?php

use App\Http\Controllers\Home\HomeController;
use Illuminate\Support\Facades\Route;

Route::name('home.')->prefix(LaravelLocalization::setLocale())->middleware('localeSessionRedirect','localizationRedirect','localeViewPath')->group(function () {
    Route::get('/', [HomeController::class , 'index'])->name('index');
    Route::get('/about-me', [HomeController::class , 'about'])->name('about');
    Route::get('/services', [HomeController::class , 'services'])->name('services');
    Route::get('/works', [HomeController::class , 'works'])->name('works');
    Route::get('/contact', [HomeController::class , 'contact'])->name('contact');
});
