<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class c_estados extends Model
{
  protected $fillable = [
      'clave', 'nombre', 'abrev',
  ];
}
