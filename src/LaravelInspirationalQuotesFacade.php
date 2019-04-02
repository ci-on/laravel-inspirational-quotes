<?php

namespace Cion\LaravelInspirationalQuotes;

use Illuminate\Support\Facades\Facade;

/**
 * @see \Cion\LaravelInspirationalQuotes\Skeleton\SkeletonClass
 */
class LaravelInspirationalQuotesFacade extends Facade
{
    /**
     * Get the registered name of the component.
     *
     * @return string
     */
    protected static function getFacadeAccessor()
    {
        return 'laravel-inspirational-quotes';
    }
}
