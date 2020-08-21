<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use DB, Session, Hash;

class User extends Model
{

    static public function verify($email, $password)
    {
        $valid = false;
        $user = DB::table('users AS u')
            ->join('users_roles AS ur', 'u.id', '=', 'ur.uid')
            ->where('u.email', '=', $email)
            ->first();
        //dd($user);

        if ($user) {

            if (Hash::check($password, $user->password)) {
                $valid = true;

                if ($user->rid == 6) Session::put('is_admin', true);
                Session::put('user_id', $user->id);
                Session::put('user_name', $user->name);
                Session::flash('sm', 'Welcome back, ' . $user->name);
            }
        }
        return $valid;
    }

    static public function saveNew($request)
    {


        $user = new self(); // = new User();
        $user->name = $request['name'];
        $user->email = $request['email'];
        $user->password = bcrypt($request['password']);
        $user->save();
        $user->roles()->attach($request['rid'] ?? 7);
        $user->save();

        Session::put('user_id', $user->id);
        Session::put('user_name', $request['name']);
        Session::flash('sm', 'Welcome ' . $user->name . 'You signup successfuly');
    }

    public function roles()
    {
        return $this->belongsToMany(Role::class, 'users_roles', 'uid', 'rid');
    }

    static public function updateItem($request, $id)
    {
        $user = self::find($id);
        $user->name = $request['name'];
        $user->email = $request['email'];
        $user->password = $request['password'];
        $user->menu_id = $request['menu_id'];
        $user->save();
        Session::flash('sm', 'User has been updated');
    }
}
