<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class c_cotiza_metales extends Model
{
  protected $fillable = [
      'ref', 'nombre', 'kilates','eq_oro','por_vc','por_cv', 'por_aval',
      'c_tipo_metal_id',
  ];
}
