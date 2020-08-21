<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Role extends Model
{
    const ADMIN = 6;
    const USER = 7;

    public function users()
    {
        return $this->belongsToMany(User::class, 'users_roles', 'rid', 'uid');
    }
}
