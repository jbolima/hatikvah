<?php

namespace App;

use App\Http\Requests\SignupRequest;
use Illuminate\Database\Eloquent\Model;
use DB, Session, Hash;

class User extends Model
{
    const ROLE_ADMIN = 6;
    const ROLE_USER = 7;

    static public function verify($email, $password)
    {
        $valid = false;
        $user = DB::table('users AS u')->where('u.email', '=', $email)->first();

        if ($user) {

            if (Hash::check($password, $user->password)) {
                $valid = true;

                if ($user->role_id == 6) Session::put('is_admin', true);
                Session::put('user_id', $user->id);
                Session::put('user_name', $user->name);
                Session::flash('sm', 'Welcome back, ' . $user->name);
            }
        }
        return $valid;
    }

    static public function saveNew($request, int $rid)
    {
        $user = new self();
        $user->name = $request['name'];
        $user->email = $request['email'];
        $user->password = Hash::make($request['password']);
        $user->role_id = $rid;
        $user->save();

        Session::put('user_id', $user->id);
        Session::put('user_name', $request['name']);
        Session::flash('sm', 'Welcome ' . $user->name . 'You signup successfuly');
    }

    public function role()
    {
        return $this->belongsTo(Role::class);
    }

    static public function updateItem($request, $id)
    {
        $user = self::find($id);
        $user->name = $request['name'];
        $user->email = $request['email'];
        $user->role_id = $request['rid'];

        if ($request->password) {
            $user->password = Hash::make($request->password);
        }
        $user->save();
        Session::flash('sm', 'User has been updated');
    }

    static public function getCurrent()
    {
        return self::find(Session::get('user_id'));
    }
}
