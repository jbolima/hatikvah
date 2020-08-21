<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\CarouselRequest;
use App\Carousel;
use Session;

class CarouselController extends MainController
{

    public function index()
    {
        //echo __METHOD__;
        self::$data['carousels'] = Carousel::all()->toArray();
        return view('cms.carousels', self::$data);
    }

    public function create()
    {
        //echo __METHOD__;
        return view('cms.add_carousel', self::$data);
    }

    public function store(CarouselRequest $request)
    {
        Carousel::saveNew($request);
        return redirect('cms/carousels');
    }

    public function show($id)
    {
        self::$data['item_id'] = $id;
        return view('cms.delete_carousel', self::$data);
    }

    public function edit($id)
    {
        //echo __METHOD__;
        self::$data['item'] = Carousel::find($id)->toArray();
        return view('cms.edit_carousel', self::$data);
    }

    public function update(CarouselRequest $request, $id)
    {
        Carousel::updateItem($request, $id);
        return redirect('cms/carousels');
    }

    public function destroy($id)
    {
        Carousel::destroy($id);
        Session::flash('sm', 'Carousel has been deleted');
        return redirect('cms/carousels');
    }

}
