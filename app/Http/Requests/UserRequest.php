<?php

namespace sistema\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UserRequest extends FormRequest
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
            'name' => 'min:4|max:60|required',
            'email' => 'min:4|max:60|required|unique:users',
            'password' => 'min:8|max:120|required'
            
        ];
    }
}
 