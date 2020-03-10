<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class LoginRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize() {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules() {
        return [
            'email'    => 'required|exists:users',
            'password' => 'required'
        ];
    }

    public function messages() {
        return [

            'email.required'    => 'Email is required',
            'email.exists'      => 'Email does not exist',
            'password.required' => 'Please enter your password'

        ];
    }
}
