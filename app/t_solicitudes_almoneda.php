<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class t_solicitudes_almoneda extends Model
{
    protected $fillable = [
        'id','fecha_movimiento','partida','capital','avaluo','fecha_vencimiento',
        'ultima_operacion','tipo_producto',
    ];

}
