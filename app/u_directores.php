<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class u_directores extends Model
{
    protected $fillable = [
        'rfc','nombre','genero','c_nivel_id','ban_activo','fecha_ini_periodo',
        'fecha_fin_periodo',
    ];
}
