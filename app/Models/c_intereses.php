<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class c_intereses extends Model
{
  protected $fillable = [
      'monto_minimo', 'monto_maximo', 'porcentaje_mensual','porcentaje_semanal',
  ];
}
