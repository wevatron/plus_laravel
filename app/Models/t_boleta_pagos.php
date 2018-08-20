<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class t_boleta_pagos extends Model
{
  protected $fillable = [
      'num_pago', 'fecha_pago','monto','interes','capital_mas_interes',
      't_boleta_id',
  ];
}
