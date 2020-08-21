<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Contactus extends Model
{
    const DEFAULT_EMAIL = "jbolima@gmail.com";

    protected $fillable = ['name', 'email_from', 'message'];
    protected $table = 'contactus';

    static public function getMessages($email)
    {
        return self::query()->orWhere('email_from', $email)->orWhere('email_to', $email)->get();
    }
}
