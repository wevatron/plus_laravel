<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class t_venta_vitrina extends Model
{
  protected $fillable = [
    'fecha_venta','capital','intNormal','intVencido','intAvaluo','abonos',
    'totalVenta','comisionVenta','demasia','numReg','sucursal',
  ];
}
