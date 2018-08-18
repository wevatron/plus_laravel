<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class u_operadores extends Model
{
    protected $fillable = [
        'rfc','nombre','usuario','genero','password','c_nivel_id',
        'c_sucursal_id','num_caja','ban_activo','fecha_ini_periodo',
        'fecha_fin_periodo',
    ];
}
