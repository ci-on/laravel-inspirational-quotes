<?php

namespace Cion\InspirationalQuotes\Tests;

use Cion\InspirationalQuotes\Facades\InspirationalQuote;

class QuoteFactoryTest extends TestCase
{
    protected $quotes = [
        [
            'quote' => 'When there is no desire, all things are at peace.',
            'author' => 'Laozi',
            'avatar' => 'image'
        ],
        [
            'quote' => 'Simplicity is the ultimate sophistication.',
            'author' => 'Leonardo da Vinci',
            'avatar' => 'image'
        ]
    ];

    /** @test */
    public function it_returns_a_random_quote()
    {
        $this->assertContains(InspirationalQuote::getRandomQuote(), $this->quotes);
    }
}
