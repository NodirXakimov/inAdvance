<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UserRegisterRequest extends FormRequest
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
            'full_name'     => 'required|string|max:255',
            'phone_number'  => 'required|string|max:15|min:9|unique:users',
            'type_id'       => 'required|exists:user_types,id',
            'password'      => 'required|string|min:8|confirmed'
        ];
    }
}
