<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class t_boleta_migracion extends Model
{
  protected $fillable = [
      't_boleta_id_new', 't_boleta_id_old','interes_old','ban_migracion',
      'u_operador_id','fecha_registro',
  ];
}
