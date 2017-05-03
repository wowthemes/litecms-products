<?php

namespace Lavalite\Product\Http\Requests;

use App\Http\Requests\Request;
use User;

class ProductUserRequest extends Request
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize(\Illuminate\Http\Request $request)
    {
        // Determine if the user is authorized to do  the action,
        return true;
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
