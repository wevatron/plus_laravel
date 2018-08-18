<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class c_nivel extends Model
{
  protected $fillable = [
      'nivel', 'nombre', 'usuario','descripcion',
  ];
}
