<?php

namespace App\Http\Controllers;

use App\Contactus;
use App\Order;
use App\User;
use Illuminate\Http\Request;

class CmsController extends MainController
{

    public function dashboard()
    {
        //echo __METHOD__;

        // return view('cms.cms_master',self::$data);
        return view('cms.dashboard', self::$data);
    }

    public function orders()
    {
        //echo __METHOD__;
        //Order::getAll();
        self::$data['orders'] = Order::getAll();
        //dd(self::$data);
        return view('cms.orders', self::$data);
    }

    public function contactus(Request $request)
    {
        self::$data['messages'] = Contactus::all();
        if ($request->method() == 'POST') {
            $formData = $request->post();
            $new_contactus = new Contactus($formData);
            $new_contactus->name = User::getCurrent()->email;
            $new_contactus->email_to = $new_contactus->email_from;
            $new_contactus->email_from = User::getCurrent()->email;
            $new_contactus->incoming = 0;
            $new_contactus->save();
            \Session::flash('sm', 'Your message has been accepted');
            //$new_contactus->name = $formData['name']
            return redirect('cms/contactus');
        }
        return view('cms.contactus', self::$data);
    }

    public function index()
    {
        echo __METHOD__;
    }
}
