<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class t_subasta extends Model
{
  protected $fillable = [
    't_boleta_id','c_fecha_subasta_id','c_status_subasta_id','precio_sugerido',
    'precio_venta_subasta','demasia',
  ];
}
