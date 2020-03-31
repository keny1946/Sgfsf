<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEmpleadosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('empleados', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('Nombres',100);
            $table->string('Apellidos',100);
            $table->string('NroDocumento',100)->unique();
            $table->string('Email',100)->unique();
            $table->string('Telefono',100);
            $table->string('Clave',100);
            $table->string('estado',100)->null();
            $table->timestamps();
            $table->unsignedBigInteger('idTipoDocumento');
            $table->foreign('idTipoDocumento')->references('id')->on('tipoDocumento')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('empleados');
    }
}
