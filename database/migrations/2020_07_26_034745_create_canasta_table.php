<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCanastaTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('canasta', function (Blueprint $table) {
            $table->increments('Id');
            $table->float('monto');
            $table->integer('IdCurso')->unsigned();
            $table->foreign('IdCurso')->references('Id')->on('curso')->onDelete('cascade');
            $table->integer('CIAlumno')->unsigned();
            $table->foreign('CIAlumno')->references('CI')->on('alumno')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('canasta');
    }
}
