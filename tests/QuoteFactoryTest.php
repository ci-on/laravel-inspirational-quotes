<?php

namespace Cion\InspirationalQuotes\Tests;

use Orchestra\Testbench\TestCase;
use Cion\InspirationalQuotes\Facades\InspirationalQuote;

class QuoteFactoryTest extends TestCase
{
    /** @test */
    public function it_returns_a_random_quote()
    {
        dd(InspirationalQuote::getRandomQuote());

        $this->assertTrue(true);
    }
}
