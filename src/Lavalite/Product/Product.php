<?php

namespace Lavalite\Product;

class Product
{
    /**
     * $product object.
     */
    protected $product;

    /**
     * Constructor.
     */
    public function __construct(\Lavalite\Product\Interfaces\ProductRepositoryInterface $product)
    {
        $this->product = $product;
    }

    /**
     * Returns count of product.
     *
     * @param array $filter
     *
     * @return int
     */
    public function count()
    {
        return  0;
    }
}
