<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\MenuRequest;
use App\Menu;
use Session;

class MenuController extends MainController
{

    public function index()
    {
        //echo __METHOD__;
        //dd(self::$data);
        return view('cms.menu', self::$data);
    }

    public function create()
    {
        //echo __METHOD__;
        return view('cms.add_menu', self::$data);
    }

    public function store(MenuRequest $request)
    {
        //echo __METHOD__;
        Menu::saveNew($request);
        return redirect('cms/menu');
    }

    public function show($id)
    {
        //echo __METHOD__;
        self::$data['item_id'] = $id;
        return view('cms.delete_menu', self::$data);
    }

    public function edit($id)
    {
        //echo __METHOD__;
        self::$data['item'] = Menu::find($id)->toArray();
        return view('cms.edit_menu', self::$data);
    }

    public function update(MenuRequest $request, $id)
    {
        Menu::updateItem($request, $id);
        return redirect('cms/menu');

    }

    public function destroy($id)
    {
        //echo __METHOD__;
        Menu::destroy($id);
        Session::flash('sm', 'Menu item has been deleted');
        return redirect('cms/menu');

    }

}
