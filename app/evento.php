<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class evento extends Model
{
    protected $fillable = [
        'id','descricao','data_inicio','data_fim','preco', 'cor','status', 'tipos_evento_id','apagado',
    ];
}
