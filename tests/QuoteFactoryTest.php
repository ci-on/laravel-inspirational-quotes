<?php

namespace Cion\InspirationalQuotes\Tests;

use Cion\InspirationalQuotes\Facades\InspirationalQuote;

class QuoteFactoryTest extends TestCase
{
    /** @test */
    public function it_returns_a_random_quote()
    {
        $this->assertContains(InspirationalQuote::getRandomQuote(), InspirationalQuote::quotes());
    }
}
