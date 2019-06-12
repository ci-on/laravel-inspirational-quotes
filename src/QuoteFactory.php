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
                'avatar' => 'https://i.imgur.com/hcfQHVk.png',
            ], [
                'quote' => 'Simplicity is the ultimate sophistication.',
                'by' => 'Leonardo da Vinci',
                'avatar' => 'https://i.imgur.com/fk7VpK6.png',
            ], [
                'quote' => 'Simplicity is the essence of happiness.',
                'by' => 'Cedric Bledsoe',
                'avatar' => '',
            ], [
                'quote' => 'Smile, breathe, and go slowly.',
                'by' => 'Thich Nhat Hanh',
                'avatar' => 'https://i.imgur.com/5dGaFFm.png',
            ], [
                'quote' => 'Simplicity is an acquired taste.',
                'by' => 'Katharine Gerould',
                'avatar' => 'https://i.imgur.com/kw0NM6i.png',
            ], [
                'quote' => 'Well begun is half done.',
                'by' => 'Aristotle',
                'avatar' => 'https://i.imgur.com/rdA2eXg.jpg',
            ], [
                'quote' => 'He who is contented is rich.',
                'by' => 'Laozi',
                'avatar' => 'https://i.imgur.com/hcfQHVk.png',
            ], [
                'quote' => 'Very little is needed to make a happy life.',
                'by' => 'Marcus Antoninus',
                'avatar' => 'https://i.imgur.com/3pzscGh.png',
            ], [
                'quote' => 'It is quality rather than quantity that matters.',
                'by' => 'Lucius Annaeus Seneca',
                'avatar' => 'https://i.imgur.com/wPZwH3H.png',
            ], [
                'quote' => 'Genius is one percent inspiration and ninety-nine percent perspiration.',
                'by' => 'Thomas Edison',
                'avatar' => 'https://i.imgur.com/djylt3R.png',
            ], [
                'quote' => 'Computer science is no more about computers than astronomy is about telescopes.',
                'by' => 'Edsger Dijkstra',
                'avatar' => 'https://i.imgur.com/GBvkWlP.png',
            ], [
                'quote' => 'It always seems impossible until it is done.',
                'by' => 'Nelson Mandela',
                'avatar' => 'https://i.imgur.com/o8d2eiJ.png',
            ], [
                'quote' => 'Act only according to that maxim whereby you can, at the same time, will that it should become a universal law.',
                'by' => 'Immanuel Kant',
                'avatar' => 'https://i.imgur.com/D9MZScY.png',
            ], [
                'quote' => 'Don’t judge each day by the harvest you reap but by the seeds that you plant.',
                'by' => 'Robert Louis Stevenson',
                'avatar' => 'https://i.imgur.com/I9GMkBS.png',
            ], [
                'quote' => 'Write it on your heart that every day is the best day in the year.',
                'by' => 'Ralph Waldo Emerson',
                'avatar' => 'https://i.imgur.com/1v1U8O2.jpg',
            ], [
                'quote' => 'Every moment is a fresh beginning.',
                'by' => 'T.S. Eliot',
                'avatar' => 'https://i.imgur.com/AjK9HKF.png',
            ], [
                'quote' => 'Without His love I can do nothing, with His love there is nothing I cannot do.',
                'by' => 'Unknown',
                'avatar' => '',
            ], [
                'quote' => 'Everything you’ve ever wanted is on the other side of fear.',
                'by' => 'George Addair',
                'avatar' => 'https://i.imgur.com/0YdRYJm.png',
            ], [
                'quote' => 'Begin at the beginning... and go on till you come to the end: then stop.',
                'by' => 'Lewis Carroll',
                'avatar' => 'https://i.imgur.com/s4RfIHa.png',
            ],
        ];
    }

    public function getRandomQuote()
    {
        return Collection::make($this->quotes())->random();
    }
}
