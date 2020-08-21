<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use session,
    Image;

class Carousel extends Model
{

    static public function saveNew($request)
    {

        $image_name = 'default.jpg';

        if ($request->hasFile('simage') && $request->file('simage')->isValid()) {

            $file = $request->file('simage');
            $image_name = date('Y.m.d.H.i.s') . '-' . $file->getClientOriginalName();
            $request->file('simage')->move(public_path() . '/images', $image_name);

            $img = Image::make(public_path() . '/images/' . $image_name);
            $img->resize(500, null, function ($constraint) {
                $constraint->aspectRatio();
            });
            $img->save();
        }
        $carousel = new self();
        $carousel->stitle = $request['stitle'];
        $carousel->sdescription = $request['sdescription'];
        $carousel->surl = $request['surl'];
        $carousel->simage = $image_name;
        $carousel->save();
        Session::flash('sm', 'New Carousel saved');
    }

    static public function updateItem($request, $id)
    {

        $image_name = '';

        if ($request->hasFile('simage') && $request->file('simage')->isValid()) {

            $file = $request->file('simage');
            $image_name = date('Y.m.d.H.i.s') . '-' . $file->getClientOriginalName();
            $request->file('simage')->move(public_path() . '/images', $image_name);

            $img = Image::make(public_path() . '/images/' . $image_name);
            $img->resize(500, null, function ($constraint) {
                $constraint->aspectRatio();
            });
            $img->save();
        }
        $carousel = self::find($id);
        $carousel->stitle = $request['stitle'];
        $carousel->sdescription = $request['sdescription'];
        $carousel->surl = $request['surl'];

        if ($image_name) {
            $carousel->simage = $image_name;
        }
        $carousel->save();
        Session::flash('sm', 'Carousel updated');
    }
}
