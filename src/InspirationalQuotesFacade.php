<?php

namespace Cion\InspirationalQuotes;

use Illuminate\Support\Facades\Facade;

/**
 * @see \Cion\InspirationalQuotes\Skeleton\SkeletonClass
 */
class InspirationalQuotesFacade extends Facade
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
