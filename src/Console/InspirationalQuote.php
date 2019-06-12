<?php

namespace Cion\InspirationalQuotes\Console;

use Illuminate\Console\Command;
use Cion\InspirationalQuotes\Facades\InspirationalQuote as Inspiration;

class InspirationalQuote extends Command
{
    protected $signature = 'inspire';

    protected $description = 'Output an inspirational quote.';

    public function handle()
    {
        $this->info(Inspiration::getRandomQuote()['quote'].' - '.Inspiration::getRandomQuote()['by']);
    }
}
