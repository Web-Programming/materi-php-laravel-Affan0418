<?php

namespace App\Providers;

use Illuminate\Support\Facades\View; 
use App\Models\Menu_category;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        logger('View::share dipanggil');
        View::share('menu_category', \App\Models\Menu_category::all());
    }
}
