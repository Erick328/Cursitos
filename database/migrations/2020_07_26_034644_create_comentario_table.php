<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateComentarioTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('comentario', function (Blueprint $table) {
            $table->increments('Id');
            $table->string('descripcion');
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
        Schema::dropIfExists('comentario');
    }
}
