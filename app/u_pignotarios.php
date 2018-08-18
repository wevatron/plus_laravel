<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class u_pignotarios extends Model
{
  protected $fillable = [
      'rfc','ife','direccion','telefono','estado_id','municipio_id',
      'cp','nombre','pignorante_solidario','fecha_registro','tipo_banco',
      'sexo','fecha_nac',
  ];
}
