<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Categorie;
use App\Product;
use App\Order;
use DB, Cart, Session;

class InvestController extends MainController
{

    public function categories()
    {
        //  \Cart::clear(); // to clear the Cart
        self::$data['categories'] = Categorie::all()->toArray();
        //dd(self::$data['categories']);

        self::$data['title'] .= 'Invest Categories';
        return view('content.categories', self::$data);
    }

    public function products($curl)
    {
        $products = Product::getProducts($curl, self::$data);

        //dd(self::$data);
        return view('content.products', self::$data);
    }

    public function item($curl, $purl)
    {
        Product::getItem($purl, self::$data);
        if (!empty(self::$data['product']->ptitle)) {
            self::$data['title'] .= self::$data['product']->ptitle;
        }
        //dd(self::$data);
        return view('content.item', self::$data);
    }

    public function addToCart(Request $request)
    {
        //$pid = $request['pid'];
        //echo 'The id: ' .$pid;
        Product::addToCart($request['pid']);
    }

    public function checkout()
    {
        //echo __METHOD__;
        $cartCollection = Cart::getContent();
        $cart = $cartCollection->toArray();
        //dd($cart);
        sort($cart);// to keep the order in the cart checkout for update
        self::$data['cart'] = $cart;
        self::$data['title'] .= 'Checkout page';
        return view('content.checkout', self::$data);
    }

    public function clearCart()
    {
        Cart:
        Cart::clear();
        return redirect('invest/checkout');
    }

    public function removeItem(Request $request)
    { //dependency injection
        //echo __METHOD__;
        if (!empty($request['id']) && is_numeric($request['id'])) {
            Cart::remove($request['id']);
        }
        return redirect('invest/checkout');
    }

    public function updateCart(Request $request)
    {
        Product::updateCart($request);
    }

    public function order()
    {
        //echo __METHOD__;
        if (Cart::isEmpty()) {
            return redirect('invest');
        } else {
            if (!Session::has('user_id')) {
                return redirect('user/signin?rt=invest/checkout');
            } else {
                Order::saveNew();
                return redirect('invest');
            }
        }
    }
}
