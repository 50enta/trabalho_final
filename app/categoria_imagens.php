<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class categoria_imagens extends Model
{
    protected $fillable = [
        'id','descricao', 'apagado',
    ];
}
