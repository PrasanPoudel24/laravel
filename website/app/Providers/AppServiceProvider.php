<?php

namespace App\Providers;

use App\Models\contact;
use Illuminate\Support\Facades\View;
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
        View::share('contact', contact::first() ?: [
            'address' => '',
            'phone1' => '',
            'phone2' => '',
            'email' => '',
            'map' => '',
        ]);
    }
}
