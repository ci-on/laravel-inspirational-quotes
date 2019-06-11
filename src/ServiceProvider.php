<?php

namespace Cion\InspirationalQuotes;

use Illuminate\Support\ServiceProvider as BaseServiceProvider;

class ServiceProvider extends BaseServiceProvider
{
    /**
     * Register the application services.
     */
    public function register()
    {
        // Register the main class to use with the facade
        $this->app->singleton('inspirational-quote', function () {
            return new QuoteFactory;
        });
    }
}
