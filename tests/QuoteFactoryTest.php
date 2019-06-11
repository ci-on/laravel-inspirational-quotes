<?php

namespace Cion\InspirationalQuotes\Tests;

use Cion\InspirationalQuotes\Facades\InspirationalQuote;

class QuoteFactoryTest extends TestCase
{
    /** @test */
    public function it_returns_a_random_quote()
    {
        $quotes = InspirationalQuote::quotes();

        for ($i = 0; $i < count($quotes); $i++) {
            $this->assertContains(InspirationalQuote::getRandomQuote(), $quotes);
        }
    }
}
