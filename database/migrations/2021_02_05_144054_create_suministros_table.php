<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSuministrosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('suministros', function (Blueprint $table) {
            $table->id();
            $table->string('titulo_suministro');
            $table->string('descripcion_suministro');
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
        Schema::dropIfExists('suministros');
    }
}
