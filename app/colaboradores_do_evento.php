<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class colaboradores_do_evento extends Model
{
    protected $fillable = [
        'colaborador_id','evento_id', 'apagado',
    ];
}
