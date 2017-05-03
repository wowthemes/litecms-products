<?php

namespace Lavalite\Product\Http\Controllers;

use App\Http\Controllers\AdminController as AdminController;
use Former;
use Lavalite\Product\Http\Requests\ProductAdminRequest;
use Lavalite\Product\Interfaces\ProductRepositoryInterface;
use Response;

/**
 * Admin controller class.
 */
class ProductAdminController extends AdminController
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
        parent::__construct();
    }

    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index(ProductAdminRequest $request)
    {
        if ($request->wantsJson()) {
            $array = $this->model->json();
            foreach ($array as $key => $row) {
                $array[$key] = array_only($row, config('product.product.listfields'));
            }

            return ['data' => $array];
        }

        $this->theme->prependTitle(trans('product::product.names').' :: ');

        return $this->theme->of('product::admin.product.index')->render();
    }

    /**
     * Display the specified resource.
     *
     * @param Request $request
     * @param int     $id
     *
     * @return Response
     */
    public function show(ProductAdminRequest $request, $id)
    {
        $product = $this->model->find($id);

        if (empty($product)) {
            if ($request->wantsJson()) {
                return [];
            }

            return view('product::admin.product.new');
        }

        if ($request->wantsJson()) {
            return $product;
        }

        Former::populate($product);

        return view('product::admin.product.show', compact('product'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @param Request $request
     *
     * @return Response
     */
    public function create(ProductAdminRequest $request)
    {
        $product = $this->model->findOrNew(0);
        Former::populate($product);

        return view('product::admin.product.create', compact('product'));
    }

    /**
     * Display the specified resource.
     *
     * @param Request $request
     *
     * @return Response
     */
    public function store(ProductAdminRequest $request)
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
    public function edit(ProductAdminRequest $request, $id)
    {
        $product = $this->model->find($id);

        Former::populate($product);

        return view('product::admin.product.edit', compact('product'));
    }

    /**
     * Update the specified resource.
     *
     * @param Request $request
     * @param int     $id
     *
     * @return Response
     */
    public function update(ProductAdminRequest $request, $id)
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
    public function destroy(ProductAdminRequest $request, $id)
    {
        try {
            $this->model->delete($id);

            return $this->success(trans('message.success.deleted', ['Module' => trans('product::product.name')]), 200);
        } catch (Exception $e) {
            return $this->error($e->getMessage());
        }
    }
}
