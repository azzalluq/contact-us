<?php

namespace Zalluq\Contactus;

use Illuminate\Support\ServiceProvider;

class ContactusServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        $this->loadRoutesFrom(__DIR__.'/routes/web.php');
        $this->loadViewsFrom(__DIR__.'/views', 'contactus');
        $this->loadMigrationsFrom(__DIR__ . '/database/migrations');
        $this->mergeConfigFrom(__DIR__.'/config/contactus.php','contactus');
        $this->publishes([
            __DIR__.'/config/contactus.php' => config_path('contactus.php'),
            __DIR__.'/views/' => resource_path('views/vendor/zalluq/contactus')
        ]);
    }
}
