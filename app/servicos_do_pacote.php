<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class servicos_do_pacote extends Model
{
    protected $fillable = [
        'servico_id','pacote_id', 'apagado',
    ];
}
