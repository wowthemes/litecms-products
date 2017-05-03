<?php

namespace Lavalite\Product\Repositories\Eloquent;

use Lavalite\Product\Interfaces\ProductRepositoryInterface;

class ProductRepository extends BaseRepository implements ProductRepositoryInterface
{
    /**
     * Specify Model class name.
     *
     * @return string
     */
    public function model()
    {
        return config('product.product.model');
    }
}
