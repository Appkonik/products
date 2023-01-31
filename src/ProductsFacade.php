<?php

namespace Appkonik\Products;

use Illuminate\Support\Facades\Facade;

/**
 * @see \Appkonik\Products\Skeleton\SkeletonClass
 */
class ProductsFacade extends Facade
{
    /**
     * Get the registered name of the component.
     *
     * @return string
     */
    protected static function getFacadeAccessor()
    {
        return 'products';
    }
}
