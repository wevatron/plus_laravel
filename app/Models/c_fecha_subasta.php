<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class c_fecha_subasta extends Model
{
  protected $fillable = [
      'fecha_subasta', 'visible', 'c_tipo_subasta','c_status_subasta_id',
      'c_sucursal_id','capital','intNormal','intVencido','intAvaluo','abonos',
      'totalVenta','comisionVenta','demasia','numReg',
  ];
}
