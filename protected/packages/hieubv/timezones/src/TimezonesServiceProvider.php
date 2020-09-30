<?php

namespace Hieubv\Timezones;

use Illuminate\Support\ServiceProvider;



class TimezonesServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap the application services.
     *
     * @return void
     */
    public function boot()
    {
        // khai bao view cho packages

        $this->loadViewsFrom(__DIR__.'/views', 'timezones');
        // coppy view into view project, after comman: php artisan vender:publish
        $this->publishes([__DIR__.'/views' => base_path('resources/views/vendor/hieubv'),]);
        //load migrate
        //$this->loadMigrationsFrom(__DIR__);


    }

    /**
     * Register the application services.
     *
     * @return void
     */
    public function register()
    {
        //
        include __DIR__.'/routes.php';
        $this->app->make('Hieubv\Timezones\TimezonesController');
    }
}
