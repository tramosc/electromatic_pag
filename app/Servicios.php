<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Servicios extends Model
{
    //relacion de uno a muchos
    public function imagenes(){
        return $this->hasMany('App\images_servicios');
    }
}
