<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class t_control_interno_cancelado extends Model
{
    protected $fillable = [
      't_boleta_id','c_sucursal_id','numero_interno','fecha',
      'hora','letra','ban_cancelar','fecha_delete',
    ];
  }
