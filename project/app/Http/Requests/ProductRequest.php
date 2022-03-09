<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ProductRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
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
        return [
            'name' => ['required', 'unique:products,name'],
            'category_id' => ['required'],
            'sub_cat_id' => ['required'],
            'color_id' => ['required'],
            'size_id' => ['required'],
            'description' => ['required'],
            'image' => ['required'],
            'price' => ['required', 'numeric'],
            'sell_price' => ['required', 'numeric'],
        ];
    }
}
