<?php

namespace App\Providers;

use Illuminate\Database\Eloquent\Model;
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
        //ini agar semua tidak ada lazy loading
        // Model::preventLazyLoading();

        //mengubah tampilan pagination
        // php artisan vendor:publish pilih no 5
        // Paginator::use
    }
}
