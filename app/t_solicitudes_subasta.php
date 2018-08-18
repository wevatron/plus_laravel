<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class t_solicitudes_subasta extends Model
{
    protected $fillable = [
      'fecha_subasta','id','capital','avaluo','tipo_producto',
    ];
}
