<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\ContentRequest;
use App\Menu;
use App\Content;
use Session;

class ContentController extends MainController
{

    public function index()
    {
        self::$data['contents'] = Content::all()->toArray();
        return view('cms.content', self::$data);
    }

    public function create()
    {
        //echo __METHOD__;
        return view('cms.add_content', self::$data);
    }

    public function store(ContentRequest $request)
    {
        //echo __METHOD__;
        Content::saveNew($request);
        return redirect('cms/content');
    }

    public function show($id)
    {
        //echo __METHOD__;
        self::$data['item_id'] = $id;
        return view('cms.delete_content', self::$data);
    }

    public function edit($id)
    {
        //echo __METHOD__;
        self::$data['item'] = Content::find($id)->toArray();
        return view('cms.edit_content', self::$data);
    }

    public function update(ContentRequest $request, $id)
    {
        Content::updateItem($request, $id);
        return redirect('cms/content');

    }

    public function destroy($id)
    {
        //echo __METHOD__;
        Content::destroy($id);
        Session::flash('sm', 'Content has been deleted');
        return redirect('cms/content');

    }

}
