<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateImagesServiciosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('images_servicios', function (Blueprint $table) {
            $table->id();
            $table->string('titulo_img');
            $table->string('imagen_servicios');

            $table->integer('imagenes_id');
            $table->timestamps();
        });
    }

    /**
     * save o create
     */

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('images_servicios');
    }
}
