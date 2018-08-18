<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class t_empenios_metal extends Model
{
    protected $fillable = [
        'peso','descripcion','c_cotiza_metales_id','t_empenios_id','pesoTotal',
    ];
}
