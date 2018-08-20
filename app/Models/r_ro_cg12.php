<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class r_ro_cg12 extends Model
{
  protected $fillable = [
      'fecha', 'id_operador','num_desempenio','desempenio','num_reposicion',
      'reposicion', 'num_refrendos','refrendos','num_empenio','empenio',
      'num_abono','abono','num_venta_subasta','venta_subasta',
      'num_venta_mostrador','venta_mostrador','caja_inicio','caja_abonos',
      'consolidados','corte_caja','sucursal_id','num_refrendo_almo',
      'refrendo_almo','num_desempenio_almo','desempenio_almo',
      'num_reposicion_almo','reposicion_almo','num_demasia_almo','demasia_almo',
  ];
}
