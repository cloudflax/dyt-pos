<?php

namespace App\Providers;

use Illuminate\Support\Facades\Blade;
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
        Blade::component('layouts.master',         'master-layout');
        Blade::component('layouts.topbar',         'topbar-layout');
        Blade::component('layouts.footer',         'footer-layout');
        Blade::component('layouts.sidebar',        'sidebar-layout');
        Blade::component('layouts.horizontal',     'horizontal-layout');
        Blade::component('layouts.right-sidebar',  'right-sidebar-layout');
        Blade::component('layouts.authentication', 'authentication-layout');
    }
}
