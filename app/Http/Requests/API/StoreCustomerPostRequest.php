<?php

namespace App\Http\Requests\API;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Exceptions\HttpResponseException;
use Illuminate\Contracts\Validation\Validator;

class StoreCustomerPostRequest extends FormRequest
{

    public function authorize()
    {
        return true;
    }

    public function rules()
    {
        return [
            'username' => 'required|string|unique:customers_checks,username',
            'email'=>'required|string|unique:customers_checks,email',
            'phone'=>'required|numeric|digits:11|unique:customers_checks,phone',
            'platform_code'=>'integer',
            'platform_name'=>'required|string',
            'login_limt'=>'integer',
            'is_login'=>'integer|min:0|max:4',
            'flags'=>'integer|min:0|max:4',
        ];
    }


    public function failedValidation(Validator $validator)
    {
        throw new HttpResponseException(response()->json([
            'success'   => false,
            'message'   => 'Validation errors',
            'data'      => $validator->errors()
        ]));

    }

    public function messages()
    {
        return [
            'username.required' => 'Username is required',
            'email.required' => 'Email is required',
            'phone.required' => 'Phone is required',
        ];
    }

}
