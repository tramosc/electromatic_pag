<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUpsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ups', function (Blueprint $table) {
            $table->id();
            $table->string('titulo_ups');
            $table->string('descripcion_ups');
            $table->string('precio');
            $table->string('img_uno');
            $table->string('img_dos');
            $table->string('img_tres');
            $table->string('img_cuatro');
            $table->string('img_cinco');
            $table->string('img_seis');
            $table->string('img_siete');
            $table->string('img_ocho');
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
        Schema::dropIfExists('ups');
    }
}
