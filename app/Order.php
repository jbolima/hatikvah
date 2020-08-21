<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Cart, Session, DB;

class Order extends Model
{

    static public function saveNew()
    {
        $order = new self();
        $order->user_id = Session::get('user_id');
        $order->data = serialize(Cart::getContent()->toArray());
        $order->total = Cart::getTotal();
        $order->save();
        Cart::clear();
        Session::flash('sm', 'Your order saved');
    }

    static public function getAll()
    {
        //$orders = DB::table('orders AS o')
        return DB::table('orders AS o')
            ->join('users AS u', 'u.id', '=', 'o.user_id')
            ->select('u.name', 'o.*')
            ->orderBy('created_at', 'desc')//;
            //echo $orders->toSql();
            ->get();
    }


}
