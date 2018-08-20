<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class c_municipios extends Model
{
  protected $fillable = [
      'c_estados_id', 'clave', 'nombre','sigla',
  ];
}
