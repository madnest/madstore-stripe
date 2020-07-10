<?php

namespace Madnest\MadstoreStripe;

use Illuminate\Support\Facades\Facade;

/**
 * @see \Madnest\MadstoreStripe\Skeleton\SkeletonClass
 */
class MadstoreStripeFacade extends Facade
{
    /**
     * Get the registered name of the component.
     *
     * @return string
     */
    protected static function getFacadeAccessor()
    {
        return 'madstore-stripe';
    }
}
