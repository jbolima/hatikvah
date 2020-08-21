<?php

namespace App\Http\Controllers;

use App\Contactus;
use Illuminate\Http\Request;
use App\Http\Requests\SigninRequest;
use App\Http\Requests\SignupRequest;
use App\User;
use Session;

class UserController extends MainController
{

    function __construct()
    {
        parent::__construct();
        $this->middleware('authguard', ['except' => ['logout', 'profile', 'postMessage']]);
    }


    public function getSignin()
    {
        self::$data['title'] .= 'Signin';
        return view('forms.signin', self::$data);
    }

    public function profile(Request $request)
    {
        self::$data['title'] .= 'Profile';
        $user = self::getCurrentUser();
        self::$data['messages'] = Contactus::getMessages($user->email);
        return view('user.profile', self::$data);
    }

    public function postMessage(Request $request)
    {
        $user = self::getCurrentUser();
        self::createMessage($request, $user->email, Contactus::DEFAULT_EMAIL, self::getCurrentUser()->email);
        return redirect('user/profile');
    }

    public function postSignin(SigninRequest $request)
    {
        $rt = !empty($request['rt']) ? $request['rt'] : ''; //invest/checkout Or home page
        //echo $request['email'] .'<br>'; = ex:avi@gmail.com=>email
        //echo $request['password']; = ex:123456=>password
        if (User::verify($request['email'], $request['password'])) {
            return redirect($rt);
        } else {
            self::$data['title'] .= 'Signin';
            return view('forms.signin', self::$data)->withErrors('Wrong email and password');
        }
    }

    public function getSignup()
    {
        //echo __METHOD__;
        self::$data['title'] .= 'Signup';
        return view('forms.signup', self::$data);
    }

    public function postSignup(SignupRequest $request)
    {
        User::saveNew($request);
        return redirect('');
    }

    public function logout()
    {
        //==> option not cleaning th cart
        // Session::forget('is_admin');
        // Session::forget('user_name');
        // Session::forget('user_id');
        //=> option cleaning Cart and also session data

        Session::flush();
        return redirect('user/signin');
    }

}
