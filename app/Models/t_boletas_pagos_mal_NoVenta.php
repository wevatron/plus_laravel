<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class t_boletas_pagos_mal_NoVenta extends Model
{
  protected $fillable = [
      't_boletas_id', 'id_tipo_boletaNoVenta','descripcion',
  ];
}
