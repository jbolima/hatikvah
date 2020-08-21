<?php

namespace App\Http\Controllers;

use App\Contactus;
use App\User;
use Illuminate\Http\Request;
use App\Menu;

class MainController extends Controller
{

    public static $data = ['title' => 'B-HCI | '];

    public function __construct()
    {
        self::$data['menu'] = Menu::all()->toArray();
    }

    /**
     * @param Request $request
     * @param null $from
     * @param null $to
     */
    public static function createMessage(Request $request, $from = null, $to = null, $name = null): void
    {
        if ($request->method() == 'POST') {
            $formData = $request->post();
            $new_contactus = new Contactus($formData);
            $new_contactus->email_from = $from ?? $formData['email_from'];
            $new_contactus->email_to = $to ?? $formData['email_to'];
            $new_contactus->incoming = 1;
            if (empty($formData['name'])) {
                $new_contactus->name = $name;
            }
            $new_contactus->save();
            \Session::flash('sm', 'Your message has been accepted');
            //$new_contactus->name = $formData['name']

        }
    }

    /**
     * @return mixed
     */
    public static function getCurrentUser()
    {
        return User::find(\Session::get('user_id'));
    }
}
