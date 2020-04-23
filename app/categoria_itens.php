<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class categoria_itens extends Model
{
    protected $fillable = [
        'id','descricao', 'apagado'
    ];
}
