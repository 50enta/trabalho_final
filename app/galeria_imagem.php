<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class galeria_imagem extends Model
{
    protected $fillable = [
        'id','image', 'apagado','categoria_imagens_id', 'evento_id',
    ];
}
