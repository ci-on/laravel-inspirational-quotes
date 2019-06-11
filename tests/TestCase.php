<?php

namespace Cion\InspirationalQuotes\Tests;

use Orchestra\Testbench\TestCase as BaseTestCase;
use Cion\InspirationalQuotes\Facades\InspirationalQuote;
use Cion\InspirationalQuotes\ServiceProvider;
use Cion\InspirationalQuotes\QuoteFactory;

class TestCase extends BaseTestCase
{
    protected function getPackageProviders($app)
    {
        return [
            ServiceProvider::class,
        ];
    }

    protected function getPackageAliases($app)
    {
        return [
            'InspirationalQuote' => QuoteFactory::class,
        ];
    }
}
