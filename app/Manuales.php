<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Manuales extends Model
{
    //
    protected $fillable = [
        'titulo_manual',
        'fecha',
        'descripcion',
        'detalles',
        'img_manual',
        'archivo_url'
    ];

    
}
