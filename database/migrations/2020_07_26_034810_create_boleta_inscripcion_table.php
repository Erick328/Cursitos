<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBoletaInscripcionTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('boleta_inscripcion', function (Blueprint $table) {
            $table->increments('Id');
            $table->float('monto');
            $table->date('fecha');
            $table->integer('IdCurso')->unsigned();
            $table->foreign('IdCurso')->references('Id')->on('curso');
            $table->integer('CIAlumno')->unsigned();
            $table->foreign('CIAlumno')->references('CI')->on('alumno');
            $table->integer('IdSuscripcion')->unsigned();
            $table->foreign('IdSuscripcion')->references('Id')->on('suscripcion_pago');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('boleta_inscripcion');
    }
}
