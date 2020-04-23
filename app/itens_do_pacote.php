<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class itens_do_pacote extends Model
{
    protected $fillable = [
        'itens_material_id','pacote_evento_id', 'apagado',
    ];
}
