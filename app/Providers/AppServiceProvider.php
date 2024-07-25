<?php

namespace App\Providers;

use App\Services\Logger;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        // Sử dụng bind
        $this->app->bind('logger',  Logger::class);

        // Sử dụng singleton
        $this->app->singleton('singleton-logger', function () {
            return new Logger();
        });
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        //
    }
}
