<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class c_tipo_prestamo_sucursal extends Model
{
  protected $fillable = [
      'c_tipo_prestamo','c_sucursal_id',
  ];
}
