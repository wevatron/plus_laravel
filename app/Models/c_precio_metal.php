<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class c_precio_metal extends Model
{
  protected $fillable = [
      'precio_compra', 'precio_venta', 'precio_gramo','precio_gramo_venta',
      'gramos','base','pv_gramo','c_metal_id',
  ];
}
