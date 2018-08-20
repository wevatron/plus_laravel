<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class t_boleta_cancelado extends Model
{
  protected $fillable = [
      'prestamo', 'avaluo','interes','recargo','abono','fecha_movimiento',
      'c_status_empenio_id','c_tipo_operacion_id','fecha_limite_pago',
      'u_pignorante_id','u_operador_id','c_tipo_producto_id','modificado',
      'interes_vencido','comision_almacenaje','comision_avaluo',
      'comision_almoneda','compuesto','ban_modificar','ban_cancelar',
      'ban_retroceso','ban_almoneda','update_time',
  ];
}
