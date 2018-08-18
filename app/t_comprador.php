<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class t_comprador extends Model
{
  protected $fillable = [
      'nombre','rfc','ife','curp','fecha','tarjeta',
    ];
  }
