<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCapacitacionesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('capacitaciones', function (Blueprint $table) {
            $table->id();
            $table->string('titulo_capacitacion');
            $table->string('descripcion_capacitacion');
            $table->string('precio');
            $table->string('pdf_archivo');
            $table->string('img_uno');
            $table->string('img_dos');
            $table->string('img_tres');
            $table->string('img_cuatro');
            $table->timestamps();
             /**4 fotos */
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('capacitaciones');
    }
}
