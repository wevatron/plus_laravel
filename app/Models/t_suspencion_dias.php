<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class t_suspencion_dias extends Model
{
  protected $fillable = [
    'fecha_transaccion','fecha_cobro','fecha_registro','u_operadores_id',
    'c_sucursal_id',
  ];
}
