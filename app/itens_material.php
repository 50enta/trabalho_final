<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class itens_material extends Model
{
    protected $fillable = [
       'id','descricao', 'quantidade', 'categoria_itens_id', 'apagado',
    ];
}
