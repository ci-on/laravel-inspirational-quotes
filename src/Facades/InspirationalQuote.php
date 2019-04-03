<?php

namespace Cion\InspirationalQuotes\Facades;

use Illuminate\Support\Facades\Facade;

/**
 * @see \Cion\InspirationalQuotes\Skeleton\SkeletonClass
 */
class InspirationalQuote extends Facade
{
    /**
     * Get the registered name of the component.
     *
     * @return string
     */
    protected static function getFacadeAccessor()
    {
        return 'inspirational-quote';
    }
}
