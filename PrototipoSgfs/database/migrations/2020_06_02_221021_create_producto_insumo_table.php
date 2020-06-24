<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProductoInsumoTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('producto_insumo', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('IdProducto');
            $table->unsignedBigInteger('IdInsumos');
            $table->string('Cantidad');
            $table->foreign('IdInsumos')->references('id')->on('insumos')->onDelete('cascade');
            $table->foreign('IdProducto')->references('id')->on('producto')->onDelete('cascade');
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
        Schema::dropIfExists('producto_insumo');
    }
}
