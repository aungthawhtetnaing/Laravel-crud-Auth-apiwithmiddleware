<?php

namespace App\Http\Requests;

use Illuminate\Contracts\Validation\Validator as ValidationValidator;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Exceptions\HttpResponseException;
use Illuminate\Support\Facades\Validator;


class ProductRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array|string>
     */
    public function rules(): array
    {
        return [
            'product_name'=>'required|string',
            'product_description'=>"required|string"
        ];
    }

    public function messages()
    {
        return [
            'product_name.required'=>'Product name is required',
            'product_name.string'=>'Product name is is required',
            'product_description.required'=>"Product description is required",
            'product_description.string'=>"Product description string is required"
        ];
    }
 

    public function failedValidation(ValidationValidator $validator){
        throw new HttpResponseException(response()->json([
            'error' => true,
            'message' => 'Validation error',
            'data' => $validator->errors(),
        ]));
    
  }
}
