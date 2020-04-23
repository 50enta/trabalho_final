<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class tipos_evento extends Model
{
    protected $fillable = [
        'id','descricao','comentario', 'image','apagado',
    ];
}
