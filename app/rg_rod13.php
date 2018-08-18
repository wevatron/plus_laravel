<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class rg_rod13 extends Model
{
  protected $fillable = [
      'fecha', 'sucursal_id','desempenio','desempenio_acu', 'refrendo',
      'refrendo_acu','abono','abono_acu','venta','venta_acu','reposicion',
      'reposicion_acu','acredores_demasia','acredores_demasia_acu','empenios',
      'empenios_acu','demasia','demasia_acu','cant_empenios',
      'cant_empenios_acu','cant_desempenio','cant_desempenio_acu',
      'cant_refrendo','cant_refrendo_acu','cant_abono','cant_abono_acu',
      'cant_venta','cant_venta_acu','cant_reposicion','cant_reposicion_acu',
      'cant_demasia','cant_demasia_acu','cant_demasia_cheque_acu',
      'comision_desempenio_alm','comision_desempenio_alm_acu',
      'comision_venta_alm','comision_venta_alm_acu','comision_refrendo_alm',
      'comision_refrendo_alm_acu','capital_recuperadoDesmp',
      'capital_recuperadoDesmp_acu','capital_recuperadoVentas',
      'capital_recuperadoVentas_acu','demasia_pagada_che',
      'demasia_pagada_che_acu','capital_refrendado','capital_refrendado_acu',
  ];
}
