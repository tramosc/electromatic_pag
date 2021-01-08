<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class images_servicios extends Model
{
    //relacion de uno a muchos inversa
    public function servicio(){
        return $this->belongsTo('App\Servicios');
    }
}
