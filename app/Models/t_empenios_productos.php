<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class t_empenios_productos extends Model
{
      protected $fillable = [
        'descripcion','contenido','t_empenios_id','marca','serie',
      ];

}
