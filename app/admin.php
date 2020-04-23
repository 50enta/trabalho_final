<?php

namespace App;

use Illuminate\Foundation\Auth\User as Authenticatable;

class admin extends Authenticatable
{
    protected $fillable = [
        'id','name', 'email', 'password','apagado',
    ];
}
