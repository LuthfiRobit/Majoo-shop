<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Support\Facades\Auth;

class ProductRequest extends FormRequest
{
    // /**
    //  * Determine if the user is authorized to make this request.
    //  *
    //  * @return bool
    //  */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        $rule = [
            'price' => ['required', 'numeric'],
            'about' => ['required'],
            'stock' => ['required', 'numeric']
        ];

        if (request()->isMethod('PUT')) {
            $rule['product_name'] = ['required', 'min:5' ,'max:255'];
        } else {
            $rule['product_name'] = ['required', 'unique:products', 'min:5' ,'max:255'];
            $rule['image'] = ['required', 'mimes:jpeg,jpg,png'];
        }

        return $rule;
    }
}
