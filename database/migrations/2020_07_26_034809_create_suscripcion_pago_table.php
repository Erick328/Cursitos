<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSuscripcionPagoTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('suscripcion_pago', function (Blueprint $table) {
            $table->increments('Id');
            $table->string('numeroTarjeta');
            $table->integer('MesExpiracion');
            $table->integer('añoExpiracion');
            $table->integer('CVC');
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
        Schema::dropIfExists('suscripcion_pago');
    }
}
