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
        $randomQuote = Inspiration::getRandomQuote();

        $this->info("{$randomQuote['quote']} - {$randomQuote['by']}");
    }
}
