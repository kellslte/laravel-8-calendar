<?php

namespace Maximof\Laravel8Calendar\Facades;

use Illuminate\Support\Facades\Facade;

/**
 * @see \Maximof\Laravel8Calendar\Skeleton\SkeletonClass
 */
class Laravel8CalendarFacade extends Facade
{
    /**
     * Get the registered name of the component.
     *
     * @return string
     */
    protected static function getFacadeAccessor()
    {
        return 'laravel-8-calendar';
    }
}
