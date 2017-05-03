<?php

namespace Lavalite\Product\Http\Controllers;

use App\Http\Controllers\UserController as UserController;
use Former;
use Lavalite\Product\Http\Requests\ProductUserRequest;
use Lavalite\Product\Interfaces\ProductRepositoryInterface;
use Response;
use User;

class ProductUserController extends UserController
{
    /**
     * Initialize product controller.
     *
     * @param type ProductRepositoryInterface $product
     *
     * @return type
     */
    public function __construct(ProductRepositoryInterface $product)
    {
        $this->model = $product;
        $this->model->setUserFilter();
        parent::__construct();
    }

    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index(ProductUserRequest $request)
    {
        $products = $this->model->all();

        $this->theme->prependTitle(trans('product::product.names').' :: ');

        return $this->theme->of('product::user.product.index', compact('products'))->render();
    }

    /**
     * Display the specified resource.
     *
     * @param Request $request
     * @param int     $id
     *
     * @return Response
     */
    public function show(ProductUserRequest $request, $role, $id)
    {
        $product = $this->model->find($id);

        return $this->theme->of('product::user.product.show', compact('product'))->render();
    }

    /**
     * Show the form for creating a new resource.
     *
     * @param Request $request
     *
     * @return Response
     */
    public function create(ProductUserRequest $request)
    {
        $product = $this->model->findOrNew(0);

        Former::populate($product);

        return $this->theme->of('product::user.product.create', compact('product'))->render();
    }

    /**
     * Display the specified resource.
     *
     * @param Request $request
     *
     * @return Response
     */
    public function store(ProductUserRequest $request)
    {
        try {
            $attributes = $request->all();
            $product = $this->model->create($attributes);

            return $this->success(trans('messages.success.created', ['Module' => trans('product::product.name')]));
        } catch (Exception $e) {
            return $this->error($e->getMessage());
        }
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param Request $request
     * @param int     $id
     *
     * @return Response
     */
    public function edit(ProductUserRequest $request, $role, $id)
    {
        $product = $this->model->find($id);

        Former::populate($product);

        return $this->theme->of('product::user.product.edit', compact('product'))->render();
    }

    /**
     * Update the specified resource.
     *
     * @param Request $request
     * @param int     $id
     *
     * @return Response
     */
    public function update(ProductUserRequest $request, $role, $id)
    {
        try {
            $attributes = $request->all();
            $product = $this->model->update($attributes, $id);

            return $this->success(trans('messages.success.updated', ['Module' => trans('product::product.name')]));
        } catch (Exception $e) {
            return $this->error($e->getMessage());
        }
    }

    /**
     * Remove the specified resource.
     *
     * @param int $id
     *
     * @return Response
     */
    public function destroy(ProductUserRequest $request, $role, $id)
    {
        try {
            $this->model->delete($id);

            return $this->success(trans('message.success.deleted', ['Module' => trans('product::product.name')]), 200);
        } catch (Exception $e) {
            return $this->error($e->getMessage());
        }
    }
}
