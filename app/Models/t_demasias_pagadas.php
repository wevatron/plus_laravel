<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class t_demasias_pagadas extends Model
{
  protected $fillable = [
      'fecha','sucursal_id','capital_insoluto','int_comision','precio_venta',
      'demasia','demasia_efectivo','demasia_cheque','num_reg',
  ];
}
