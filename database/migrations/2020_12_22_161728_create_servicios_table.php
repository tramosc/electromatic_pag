<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateServiciosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('servicios', function (Blueprint $table) {
            $table->id();
            $table->string('titulo_servicios');
            $table->string('img_portada');
            $table->string('descripcion');
            $table->string('titulo1');
            $table->string('parrafo1');
            $table->string('titulo2');
            $table->string('parrafo2');
            $table->string('titulo3');
            $table->string('parrafo3');


            $table->string('img_uno');
            $table->string('img_dos');
            $table->string('img_tres');
            $table->string('img_cuatro');
            $table->string('img_cinco');
            $table->string('img_seis');
            $table->string('img_siete');
            $table->string('img_ocho');
            $table->string('img_nueve');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('servicios');
    }
}
