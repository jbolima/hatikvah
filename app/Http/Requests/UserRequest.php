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

    /**
     * Get the validation rules that apply to the request.
     *
     * @param Request $request
     * @return array
     */
    public function rules(Request $request)
    {
        $item_id = isset($request->item_id) ? ',' . $request->item_id : '';
        $password = !isset($request->item_id) ? 'required|' : '';

        return [
            'rid' => 'required',
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users,email' . $item_id,
            'password' => $password . 'string|min:6|confirmed',
        ];
    }

}
