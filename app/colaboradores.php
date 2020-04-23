<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class colaboradores extends Model
{
    protected $fillable = [
        'nome', 'apagado','id','contacto','funcao',
    ];
}
