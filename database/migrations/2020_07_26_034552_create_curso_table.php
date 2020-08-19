<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCursoTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('curso', function (Blueprint $table) {
            $table->Increments('Id');
            $table->string('nombre');
            $table->string('imagen');
            $table->integer('precio');
            $table->string('descripcion');
            $table->string('requisitos');
            $table->integer('estado');
            $table->integer('IdCategoria')->unsigned();
            $table->foreign('IdCategoria')->references('Id')->on('categoria')->onDelete('cascade');
            $table->integer('CIProfesor')->unsigned();
            $table->foreign('CIProfesor')->references('CI')->on('profesor');
            
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('curso');
    }
}
