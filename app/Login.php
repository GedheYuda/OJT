<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Login extends Model
{
    //
    protected $table = "users";
    protected $fillable = [
        "full_name"
    ];
    protected $hidden = [
        "email","password"
    ];
}
