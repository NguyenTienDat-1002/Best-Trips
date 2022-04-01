<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class Register extends FormRequest
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
            'fullname'=> 'required|string|max:100',
            'username'=> 'required|unique:User,username|max:50',
            'password'=> 'required|string|min:8|max:32|regex:{^(?=.*[a-z])(?=.*[A-Z])(?=.*\d)[a-zA-Z\d]{8,32}$}',
            'repassword'=> 'required|string|min:8|max:32|same:password',
        ];
    }

    public function messages(){
        return [
            'password.regex' => 'Your password must be at least 8 characters including a lowercase letter, an uppercase letter, and a number',
        ];
    }
}
