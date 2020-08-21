<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Request;

class ProductRequest extends FormRequest
{

    public function authorize()
    {
        return true;
    }

    public function rules(Request $request)
    {

        $item_id = !empty($request['item_id']) ? ',' . $request['item_id'] : '';// for unique=> purl

        return [
            'categorie_id' => 'required',
            'ptitle' => 'required',
            'purl' => 'required|regex:/^[a-z\d]+(-[a-z\d]+)*$/|unique:products,purl' . $item_id,
            'particle' => 'required',
            'price' => 'required|numeric',
            'pimage' => 'image'
        ];
    }

}
