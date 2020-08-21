<?php

namespace App\Http\Controllers;

use App\Contactus;
use Illuminate\Http\Request;
use App\Content, DB, Session;


class PagesController extends MainController
{

    public function home()
    {
        self::$data['title'] .= 'Home';
        self::$data['carousels'] = DB::table('carousels')->orderBy('id', 'desc')->get();
        //echo __METHOD__;
        return view('content.home', self::$data);//('master');
    }

    public function aboutus()
    {
        self::$data['title'] .= 'About Us';
        //self::$data['aboutus'] = DB::table('aboutus')->orderBy('id','desc')->get();
        return view('content.aboutus', self::$data);
    }

    public function contactus(Request $request)
    {
        //echo __METHOD__;
        self::$data['title'] .= 'Contact Us';
        self::createMessage($request, null, Contactus::DEFAULT_EMAIL);
        self::$data['contactus'] = DB::table('contactus')->orderBy('id', 'desc')->get();
        return view('content.contactus', self::$data);
    }


    public function content($url)
    { // dynamic link method
        //echo $url;
        Content::getContent($url, self::$data);
        return view('content.contents', self::$data);
    }
}
