<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePedidoEventoTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pedidoevento', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('idCliente');
            $table->unsignedBigInteger('idEvento');
            $table->unsignedBigInteger('idServicio');
            $table->string('descripcion');
            $table->string('valor');
            $table->date('fecha');
            $table->foreign('idCliente')->references('id')->on('users');
            $table->foreign('idEvento')->references('id')->on('eventos');
            $table->foreign('idServicio')->references('id')->on('servicios');
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
        Schema::dropIfExists('pedidoevento');
    }
}
