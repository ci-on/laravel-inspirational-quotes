<?php

namespace Cion\InspirationalQuotes;

use Illuminate\Support\ServiceProvider as BaseServiceProvider;

class ServiceProvider extends BaseServiceProvider
{
    /**
     * Bootstrap the application services.
     */
    public function boot()
    {
        if ($this->app->runningInConsole()) {
            $this->publishes([
                __DIR__.'/../config/config.php' => config_path('inspirational-quotes.php'),
            ], 'config');

            // Registering package commands.
            // $this->commands([]);
        }
    }

    /**
     * Register the application services.
     */
    public function register()
    {
        // Automatically apply the package configuration
        $this->mergeConfigFrom(__DIR__.'/../config/config.php', 'inspirational-quote');

        // Register the main class to use with the facade
        $this->app->singleton('inspirational-quote', function () {
            return new QuoteFactory;
        });
    }
}
