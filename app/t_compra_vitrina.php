<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class t_compra_vitrina extends Model
{
  protected $fillable = [
    't_boleta_id','t_subasta_id','t_comprador_id','cantidad','c_sucursal_id',
    'fecha','procedencia_venta','precioVenta','capital','intNormal',
    'intVencido','intAvaluo','abonos','totalVenta','comisionVenta',
    'comision_almacenaje','demasia','c_status_demasia_id','num_cheque',
    'retasa','fecha_pag','num_tarjeta','lee_reg',
  ];
}
