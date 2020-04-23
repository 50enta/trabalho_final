<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class pacote_evento extends Model
{
    protected $fillable = [
        'id','descricao', 'apagado','inter_inferior', 'inter_superior','precoTotal',
    ];
}
