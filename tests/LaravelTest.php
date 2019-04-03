<?php

namespace Cion\InspirationalQuotes\Tests;

use Illuminate\Support\Facades\Artisan;
use Cion\InspirationalQuotes\Facades\InspirationalQuote;

class LaravelTest extends TestCase
{
    /** @test */
    public function the_console_command_returns_a_quote()
    {
        $this->withoutMockingConsoleOutput();

        InspirationalQuote::shouldReceive('getRandomQuote')
            ->once()
            ->andReturn('some quote');

        $this->artisan('inspire');

        $output = Artisan::output();

        $this->assertSame('some joke'.PHP_EOL, $output);
    }
}
