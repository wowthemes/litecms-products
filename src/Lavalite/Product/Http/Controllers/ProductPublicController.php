<?php

namespace Lavalite\Product\Http\Controllers;

use App\Http\Controllers\PublicController as CMSPublicController;
use Lavalite\Product\Interfaces\ProductRepositoryInterface;

class ProductPublicController extends CMSPublicController
{
    /**
     * Constructor.
     *
     * @param type \Lavalite\Product\Interfaces\ProductRepositoryInterface $product
     *
     * @return type
     */
    public function __construct(ProductRepositoryInterface $product)
    {
        $this->model = $product;
        parent::__construct();
    }

    /**
     * Show product's list.
     *
     * @param string $slug
     *
     * @return response
     */
    protected function index()
    {
        $products = $this->model->all();

        return $this->theme->of('product::public.product.index', compact('products'))->render();
    }

    /**
     * Show product.
     *
     * @param string $slug
     *
     * @return response
     */
    protected function show($slug)
    {
        $product = $this->model->findBySlug($slug);

        return $this->theme->of('product::public.product.show', compact('product'))->render();
    }
}
