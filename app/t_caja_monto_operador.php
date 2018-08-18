<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class t_caja_monto_operador extends Model
{
  protected $fillable = [
      'fecha','caja','ban_cierre_caja','abono_caja','u_operadores_id',
      'empenios','refrendos','abonos','desempenios','duplicado',
      'venta_subasta','venta_vitrina','consolidados','t_boleta_id',
      'total_ingresos','total_egresos','total',
  ];

}
