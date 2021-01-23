<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePozosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pozos', function (Blueprint $table) {
            $table->id();
            $table->string('titulo_pozo');
            $table->string('descripcion_pozo');
            $table->string('precio');
            $table->string('img_uno');
            $table->string('img_dos');
            $table->string('img_tres');
            $table->string('img_cuatro');
            $table->string('img_cinco');
            $table->string('img_seis');
            $table->string('img_siete');
            $table->timestamps();
             /**8 fotos */
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('pozos');
    }
}
