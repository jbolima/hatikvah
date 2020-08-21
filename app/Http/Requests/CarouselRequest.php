<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Request;

class CarouselRequest extends FormRequest
{

    public function authorize()
    {
        return true;
    }

    public function rules(Request $request)
    {

        $item_id = !empty($request['item_id']) ? ',' . $request['item_id'] : '';
        return [
            'stitle' => 'required',
            'surl' => 'required|regex:/^[a-z\d]+(-[a-z\d]+)*$/|unique:carousels,surl' . $item_id,
            'sdescription' => 'required',
            'simage' => 'image'

        ];
    }
}
