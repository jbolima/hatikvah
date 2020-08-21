<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\ProductRequest;
use App\Categorie;
use App\Product;
use Session;

class ProductController extends MainController
{

    public function index()
    {
        //echo __METHOD__;
        //dd(self::$data);
        self::$data['products'] = Product::all()->toArray();
        return view('cms.products', self::$data);
    }

    public function create()
    {
        //echo __METHOD__;
        self::$data['categories'] = Categorie::all()->toArray();//store category for new product
        return view('cms.add_product', self::$data);
    }

    public function store(ProductRequest $request)
    {
        //echo __METHOD__;
        Product::saveNew($request);
        return redirect('cms/products');
    }

    public function show($id)
    {
        //echo __METHOD__;
        self::$data['item_id'] = $id;
        return view('cms.delete_product', self::$data);
    }

    public function edit($id)
    {
        //echo __METHOD__;
        self::$data['categories'] = Categorie::all()->toArray();//store category for new product
        self::$data['item'] = Product::find($id)->toArray();
        return view('cms.edit_product', self::$data);
    }

    public function update(ProductRequest $request, $id)
    {
        Product::updateItem($request, $id);
        return redirect('cms/products');

    }

    public function destroy($id)
    {
        //echo __METHOD__;
        Product::destroy($id);
        Session::flash('sm', 'Product has been deleted');
        return redirect('cms/products');

    }

}
