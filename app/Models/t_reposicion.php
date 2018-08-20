<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class t_reposicion extends Model
{
  protected $fillable = [
      'idB','prestamo','fecha','cargo','tipo','pignotario',
      'c_status_empenio_id','	id_usuario',
  ];
}
