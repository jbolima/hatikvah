<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\CategoryRequest;
use App\Categorie;
use Session;

class CategoryController extends MainController
{

    public function index()
    {
        //echo __METHOD__;
        //dd(self::$data);
        self::$data['categories'] = Categorie::all()->toArray();
        return view('cms.categories', self::$data);
    }

    public function create()
    {
        //echo __METHOD__;
        return view('cms.add_category', self::$data);
    }

    public function store(CategoryRequest $request)
    {
        //echo __METHOD__;
        Categorie::saveNew($request);
        return redirect('cms/categories');
    }

    public function show($id)
    {
        //echo __METHOD__;
        self::$data['item_id'] = $id;
        return view('cms.delete_category', self::$data);
    }

    public function edit($id)
    {
        //echo __METHOD__;
        self::$data['item'] = Categorie::find($id)->toArray();
        return view('cms.edit_category', self::$data);
    }

    public function update(CategoryRequest $request, $id)
    {
        Categorie::updateItem($request, $id);
        return redirect('cms/categories');

    }

    public function destroy($id)
    {
        //echo __METHOD__;
        Categorie::destroy($id);
        Session::flash('sm', 'Category has been deleted');
        return redirect('cms/categories');

    }

}
