<?php

namespace Lavalite\Product\Http\Requests;

use App\Http\Requests\Request;
use User;

class ProductAdminRequest extends Request
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize(\Illuminate\Http\Request $request)
    {
        // Determine if the user is authorized to create an entry,
        if ($request->isMethod('POST') || $request->is('*/create')) {
            return User::can('product.product.create');
        }

        // Determine if the user is authorized to update an entry,
        if ($request->isMethod('PUT') || $request->isMethod('PATCH') || $request->is('*/edit')) {
            return User::can('product.product.edit');
        }

        // Determine if the user is authorized to delete an entry,
        if ($request->isMethod('DELETE')) {
            return User::can('product.product.delete');
        }

        // Determine if the user is authorized to view the module.
        return User::can('product.product.view');
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules(\Illuminate\Http\Request $request)
    {
        // validation rule for create request.
        if ($request->isMethod('POST')) {
            return [
                'category_id'         => 'required',
                'model_id'            => 'required',
                'name'                => 'required',
                'price'               => 'required',
                'quantity'            => 'required',
            ];
        }

        // Validation rule for update request.
        if ($request->isMethod('PUT') || $request->isMethod('PATCH')) {
            return [
                'category_id'         => 'required',
                'model_id'            => 'required',
                'name'                => 'required',
                'price'               => 'required',
                'quantity'            => 'required',
            ];
        }

        // Default validation rule.
        return [

        ];
    }
}
