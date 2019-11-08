<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class boutique extends Model
{
    protected $fillable = [
        'nombre', 'direccion', 'email', 'telefono',
    ];

}
