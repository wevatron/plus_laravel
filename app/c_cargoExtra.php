<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class c_cargoExtra extends Model
{
  protected $fillable = [
      'cargoP', 'cargoF', 'periodoInicial','periodoFinal','descripcion',
  ];
}
