<?php

namespace Cion\InspirationalQuotes\Tests;

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
            'InspirationalQuote' => InspirationalQuote::class,
        ];
    }
}
