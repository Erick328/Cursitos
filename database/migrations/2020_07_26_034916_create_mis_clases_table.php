<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMisClasesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('mis_clases', function (Blueprint $table) {
            $table->integer('IdCurso')->unsigned();
            $table->foreign('IdCurso')->references('Id')->on('curso')->onDelete('cascade');
            $table->integer('IdBoleta')->unsigned();
            $table->foreign('IdBoleta')->references('Id')->on('boleta_inscripcion')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('mis_clases');
    }
}
