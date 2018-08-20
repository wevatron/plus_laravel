<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class c_status_usuario extends Model
{
  protected $fillable = [
      'status', 'nivel',
  ];
}
