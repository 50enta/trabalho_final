<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class processo_pagamento extends Model
{
    protected $fillable = [
        'id','status', 'apagado',
    ];
}
