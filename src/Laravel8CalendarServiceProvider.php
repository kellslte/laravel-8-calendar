<?php

namespace Maximof\Laravel8Calendar;

use Illuminate\Support\ServiceProvider;

class Laravel8CalendarServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap the application services.
     */
    public function boot()
    {
      /**
       * Load views from folder
       * 
       */
      $this->loadViewsFrom(__DIR__.'/views/',
        'laravel-8-calendar');
    }

    /**
     * Register the application services.
     */
    public function register()
    {

        // Register the main class to use with the facade
        $this->app->singleton('laravel-8-calendar', function () {
            return new Laravel8Calendar;
        });
    }
}
