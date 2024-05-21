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
            'ProductType' => 'required|regex:/^[A-Za-z0-9]+$/',
            'ProductCode' => 'required|regex:/^[A-Za-z0-9]+$/',
            'ProductName' => 'required|string|max:50',
            'Quantity' => 'required|numeric',
            'Note' => 'nullable|string|max:60',
        ];
    }

    /**
     * Get the error messages for the defined validation rules.
     *
     * @return array
     */
    public function messages()
    {
        return [
            'ProductType.required' => 'Product Type is required',
            'ProductType.regex' => 'Product Type must not contain special characters',
            'ProductCode.required' => 'Product Code is required',
            'ProductCode.regex' => 'Product Code must not contain special characters',
        ];
    }
}