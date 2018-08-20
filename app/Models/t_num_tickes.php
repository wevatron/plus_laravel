<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class t_num_tickes extends Model
{
  protected $fillable = [
    't_boleta_id','c_status_boleta','fecha',
  ];
}
