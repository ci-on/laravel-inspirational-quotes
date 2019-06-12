<?php

namespace Cion\InspirationalQuotes;

use Cion\InspirationalQuotes\Console\InspirationalQuote;
use Illuminate\Support\ServiceProvider as BaseServiceProvider;

class ServiceProvider extends BaseServiceProvider
{
    /**
     * Bootstrap the application services.
     */
    public function boot()
    {
        if ($this->app->runningInConsole()) {
            $this->commands([
                InspirationalQuote::class,
            ]);
        }
    }

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
