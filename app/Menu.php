<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Session;

class Menu extends Model
{

    static public function saveNew($request)
    {
        $menu = new self();
        $menu->link = $request['link'];
        $menu->url = $request['url'];
        $menu->mtitle = $request['mtitle'];
        $menu->save();
        Session::flash('sm', 'New menu item saved');
    }

    static public function updateItem($request, $id)
    {
        $menu = self::find($id);
        $menu->link = $request['link'];
        $menu->url = $request['url'];
        $menu->mtitle = $request['mtitle'];
        $menu->save();
        Session::flash('sm', 'Menu item Updated');

    }
}


