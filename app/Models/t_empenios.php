<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class t_empenios extends Model
{
  protected $fillable = [
      'c_tipo_prestamo','u_pignorante_id','c_sub_productos_id',
      'c_status_empenio_id','valuo','prestamo','maximo','minimo',
  ];
}
