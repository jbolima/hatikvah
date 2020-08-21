<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use DB, Session;

class Content extends Model
{

    static public function getContent($url, &$data)
    {

        $data['contents'] = DB::table('contents AS c')
            ->join('menus AS m', 'm.id', '=', 'c.menu_id')
            ->where('m.url', '=', $url)
            ->get()
            ->toArray();
        //dd($data);

        if (!empty($data['contents'][0]->mtitle)) $data['title'] .= $data['contents'][0]->mtitle;
        //dd($data);
    }

    static public function saveNew($request)
    {
        $content = new self();
        $content->title = $request['title'];
        $content->article = $request['article'];
        $content->menu_id = $request['menu_id'];
        $content->save();
        Session::flash('sm', 'New content saved');
    }

    static public function updateItem($request, $id)
    {
        $content = self::find($id);
        $content->title = $request['title'];
        $content->article = $request['article'];
        $content->menu_id = $request['menu_id'];
        $content->save();
        Session::flash('sm', 'Content has been updated');
    }

}
