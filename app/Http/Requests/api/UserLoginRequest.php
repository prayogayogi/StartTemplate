<?php

namespace App\Http\Requests\api;

use Exception;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Contracts\Validation\Validator;
use Illuminate\Http\Exceptions\HttpResponseException;

class UserLoginRequest extends FormRequest
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
     * @return array<string, mixed>
     */
    public function rules()
    {
        return [
            'email'     => 'required|email',
            'password'  => 'required'
        ];
    }

    /**
     * failed validatio
     *
     * @return error|array
     */
    public function failedValidation(Validator $validator)
    {
        throw new HttpResponseException(response()->json([
            'success'   => false,
            'message'   => 'Validation error',
            'data'      => $validator->errors()
        ]));
    }

    /**
     * custome message
     *
     * @return  void
     */
    public function messages(): array
    {
        return [
            'email.required'    => 'Email Harus di isi',
            'password.required' => 'Password Harus di isi',
        ];
    }
}
