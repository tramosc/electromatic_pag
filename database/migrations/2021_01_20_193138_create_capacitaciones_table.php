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
            $table->string('link');
            $table->string('precio');
            $table->string('img_portada');
            $table->string('titulo_archivo1');
            $table->string('pdf_archivo');
            $table->string('titulo_archivo2');
            $table->string('pdf_archivodos');
            $table->string('titulo_archivo3');
            $table->string('pdf_archivotres');
            $table->string('titulo_archivo4');
            $table->string('pdf_archivocuatro');
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
