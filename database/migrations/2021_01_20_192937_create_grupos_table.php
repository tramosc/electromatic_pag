<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateGruposTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('grupos', function (Blueprint $table) {
            $table->id();
            $table->string('titulo_grupo');
            $table->string('descripcion_grupo');
            $table->string('precio');
            $table->string('img_uno');
            $table->string('img_dos');
            $table->string('img_tres');
            $table->string('img_cuatro');
            $table->string('img_cinco');
            $table->string('img_seis');
            $table->string('img_siete');
            $table->string('img_zoom1');
            $table->string('img_zoom2');
            $table->string('img_zoom3');
            $table->string('img_zoom4');

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
        Schema::dropIfExists('grupos');
    }
}
