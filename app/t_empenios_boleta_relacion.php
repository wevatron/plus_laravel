<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class t_empenios_boleta_relacion extends Model
{
  protected $fillable = [
      't_empenios_id','t_boleta_id',
  ];

}
