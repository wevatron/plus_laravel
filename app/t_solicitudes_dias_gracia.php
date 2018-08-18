<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class t_solicitudes_dias_gracia extends Model
{
  protected $fillable = [
      'fecha_movimiento','id','tipo_producto','dias_gracia','prestamo',
      'fecha_vencimiento',
  ];
}
