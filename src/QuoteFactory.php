<?php

namespace Cion\InspirationalQuotes;

use Illuminate\Support\Collection;

class QuoteFactory
{
    public function quotes()
    {
        return [
            [
                'quote' => 'When there is no desire, all things are at peace.',
                'by' => 'Laozi',
                'avatar' => 'https://i.imgur.com/hcfQHVk.png'
            ], [
                'quote' => 'Simplicity is the ultimate sophistication.',
                'by' => 'Leonardo da Vinci',
                'avatar' => 'https://i.imgur.com/fk7VpK6.png'
            ], [
                'quote' => 'Don’t judge each day by the harvest you reap but by the seeds that you plant.',
                'by' => 'Robert Louis Stevenson',
                'avatar' => 'https://i.imgur.com/I9GMkBS.png'
            ], [
                'quote' => 'Write it on your heart that every day is the best day in the year.',
                'by' => 'Ralph Waldo Emerson',
                'avatar' => 'https://i.imgur.com/1v1U8O2.jpg'
            ], [
                'quote' => 'Every moment is a fresh beginning.',
                'by' => 'T.S. Eliot',
                'avatar' => 'https://i.imgur.com/AjK9HKF.png'
            ], [
                'quote' => 'Without His love I can do nothing, with His love there is nothing I cannot do.',
                'by' => 'Unknown',
                'avatar' => ''
            ], [
                'quote' => 'Everything you’ve ever wanted is on the other side of fear.',
                'by' => 'George Addair',
                'avatar' => 'https://i.imgur.com/0YdRYJm.png'
            ], [
                'quote' => 'Begin at the beginning... and go on till you come to the end: then stop.',
                'by' => 'Lewis Carroll',
                'avatar' => 'https://i.imgur.com/s4RfIHa.png'
            ],
        ];
    }

    public function getRandomQuote()
    {
        return Collection::make($this->quotes())->random();
    }
}
