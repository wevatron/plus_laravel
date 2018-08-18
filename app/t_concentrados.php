<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class t_concentrados extends Model
{
  protected $fillable = [
    'fecha','hora','cantidad_concentrada','cantidad_restante','id_operador',
    'id_gerente','sucursal',
  ];
}
