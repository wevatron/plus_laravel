<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class r_rg_cg11 extends Model
{
  protected $fillable = [
      'fecha', 'sucursal_id','depositaria_reg_m','depositaria_cant_m',
      'depositaria_reg_v','depositaria_cant_v','almoneda_reg_m',
      'almoneda_cant_m','almoneda_reg_v','almoneda_cant_v',
  ];
}
