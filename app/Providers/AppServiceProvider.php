<?php

namespace App\Providers;

use App\Models\Setting;
use Illuminate\Support\Facades\View;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
//        RealRashid\SweetAlert\SweetAlertServiceProvider::class;
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        View::composer('*', function ($view) {
            $auth_user = auth()->user();
            $setting = Setting::first();


            $view->with('auth_user', $auth_user);
            $view->with('setting', $setting);
        });
    }
}
