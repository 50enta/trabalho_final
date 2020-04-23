<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class imagem_evento extends Model
{
    protected $fillable = [
        'id','image', 'apagado','categoria_imagens_id', 'evento_id',
    ];
}
