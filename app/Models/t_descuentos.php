<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class t_descuentos extends Model
{
      protected $fillable = [
          't_boleta_id','cobro','c_status','operacion','id_operador',
          'c_sucursal','fecha',
      ];
}
