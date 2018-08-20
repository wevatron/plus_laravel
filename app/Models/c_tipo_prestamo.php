<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class c_tipo_prestamo extends Model
{
  protected $fillable = [
      'ref','nombre','c_tipo_producto','interes_semanal','plazos','dias_plazos',
      'dias_gracia','porcentaje_max','porcentaje_min','resguardo',
  ];
}
