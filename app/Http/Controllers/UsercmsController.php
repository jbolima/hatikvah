<?php

namespace App\Http\Controllers;

use App\Http\Requests\UserRequest;
use App\User;
use Session;

class UsercmsController extends MainController
{

    public function index()
    {
        //echo __METHOD__;
        self::$data['users'] = User::all()->toArray();
        return view('cms.users', self::$data);

    }

    public function create()
    {
        self::$data['user'] = new User;
        return view('cms.add_user', self::$data);
    }

    public function store(UserRequest $request)
    {
        User::saveNew($request, $request['rid']);
        return redirect('cms/users');
    }

    public function show($id)
    {

        self::$data['item_id'] = $id;
        return view('cms.delete_user', self::$data);
    }

    public function edit(User $user)
    {
        self::$data['user'] = $user;
        return view('cms.add_user', self::$data);
    }

    public function update(UserRequest $request, $id)
    {
        User::updateItem($request, $id);
        return redirect('cms/users');
    }

    public function destroy($id)
    {
        User::destroy($id);
        Session::flash('sm', 'User has been deleted');
        return redirect('cms/users');

    }

}
