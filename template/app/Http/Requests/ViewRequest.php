<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ViewRequest extends FormRequest
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
            'name' => ['required', 'min:2', 'max:5'],
            'password' => ['required', 'confirmed'],
            'file' => ['required', 'size:1024', 'mimes:jpg,mp4,pdf'],
        ];
    }

    public function messages()
    {
        return [
            'name.required' => 'EKhane nam dite hbe'
        ];
    }
}
