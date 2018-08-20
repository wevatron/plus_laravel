<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class c_sucursal extends Model
{
  protected $fillable = [
      'sucursal', 'monto_max_concentrado', 'monto_max_prestamo',
      'fondo_revolvente', 'telefono', 'subastas','direccion', 'cp',
      'monto_demasiaCheque','sigla',
  ];
}
