<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class c_cotiza_producto extends Model
{
  protected $fillable = [
      'por_aval', 'por_vc', 'precio_minimo','precio_maximo',
      'c_sub_productos_id',
  ];
}
