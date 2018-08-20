<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class c_productos extends Model
{
  protected $fillable = [
      'nombre', 'c_tipo_producto_id',
  ];
}
