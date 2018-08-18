<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class c_sub_productos extends Model
{
    protected $fillable = [
        'subproducto', 'c_producto_id',
    ];
}
