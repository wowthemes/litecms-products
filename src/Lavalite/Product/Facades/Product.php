<?php

namespace Lavalite\Product\Facades;

use Illuminate\Support\Facades\Facade;

class Product extends Facade
{
    /**
     * Get the registered name of the component.
     *
     * @return string
     */
    protected static function getFacadeAccessor()
    {
        return 'product';
    }
}
