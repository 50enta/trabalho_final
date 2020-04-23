<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class servicos extends Model
{
    protected $fillable = [
        'id','descricao', 'apagado',
    ];
}
