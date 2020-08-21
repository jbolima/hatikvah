<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Request;

class UserRequest extends FormRequest
{

    public function authorize()
    {
        return true;
    }

    public function rules()
    {
        return [
            'rid' => 'required',
            'name' => 'required|min:2|max:70',
            'email' => 'required|email|unique:users,email',
            'password' => 'required|min:6|max:10|confirmed'
        ];
    }

}
