<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Session, Image;

class Categorie extends Model
{

    static public function saveNew($request)
    {

        $image_name = 'default.jpg';

        if ($request->hasFile('cimage') && $request->file('cimage')->isValid()) {

            $file = $request->file('cimage');
            $image_name = date('Y.m.d.H.i.s') . '-' . $file->getClientOriginalName();
            $request->file('cimage')->move(public_path() . '/images', $image_name);

            $img = Image::make(public_path() . '/images/' . $image_name);
            $img->resize(300, null, function ($constraint) {
                $constraint->aspectRatio();
            });
            $img->save();
        }
        $category = new self();
        $category->ctitle = $request['ctitle'];
        $category->carticle = $request['carticle'];
        $category->curl = $request['curl'];
        $category->cimage = $image_name;
        $category->save();
        Session::flash('sm', 'New category saved');
    }

    static public function updateItem($request, $id)
    {
        $image_name = '';

        if ($request->hasFile('cimage') && $request->file('cimage')->isValid()) {

            $file = $request->file('cimage');
            $image_name = date('Y.m.d.H.i.s') . '-' . $file->getClientOriginalName();
            $request->file('cimage')->move(public_path() . '/images', $image_name);
        }
        $category = self::find($id);
        $category->ctitle = $request['ctitle'];
        $category->carticle = $request['carticle'];
        $category->curl = $request['curl'];

        if ($image_name) {
            $category->cimage = $image_name;
        }
        $category->save();
        Session::flash('sm', 'Category updated');
    }

}
