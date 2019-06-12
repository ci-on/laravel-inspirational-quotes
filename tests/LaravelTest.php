<?php

namespace Cion\InspirationalQuotes\Tests;

use Illuminate\Support\Str;
use Illuminate\Support\Facades\Artisan;
use Cion\InspirationalQuotes\Facades\InspirationalQuote;

class LaravelTest extends TestCase
{
    /** @test */
    public function it_returns_a_quote_when_running_the_command()
    {
        $this->withoutMockingConsoleOutput();

        $this->artisan('inspiration');

        $quotes = InspirationalQuote::quotes();

        $quote = Str::before(Artisan::output(), ' - ');

        $this->assertContains($quote, $quotes);
    }
}
