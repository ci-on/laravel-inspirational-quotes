<?php

namespace Cion\InspirationalQuotes\Tests;

use Cion\InspirationalQuotes\QuoteFactory;
use Cion\InspirationalQuotes\ServiceProvider;
use Orchestra\Testbench\TestCase as BaseTestCase;

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
