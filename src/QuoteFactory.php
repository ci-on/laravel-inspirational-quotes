<?php

namespace Cion\InspirationalQuotes;

use Illuminate\Support\Collection;

class QuoteFactory
{
    public function getRandomQuote()
    {
        return Collection::make([
            [
                'quote' => 'When there is no desire, all things are at peace.',
                'author' => 'Laozi',
                'avatar' => 'image',
            ], [
                'quote' => 'Simplicity is the ultimate sophistication.',
                'author' => 'Leonardo da Vinci',
                'avatar' => 'image',
            ],
        ])->random();
    }
}
