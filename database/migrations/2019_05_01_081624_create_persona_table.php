<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePersonaTable extends Migration
{
    /**
     * Run the migrations.
     * Clase para realizar las migraciones code-first para la tabla de personas
     * @return void
     */
    public function up()
    {
        Schema::create('personas', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nombre');
            $table->string('aPaterno');
            $table->string('aMaterno');
            $table->string('domicilio');
            $table->string('nExt');
            $table->string('nInt');
            $table->string('colonia');
            $table->string('ciudad');
            $table->string('estado');
            $table->string('telefono');
            $table->string('edad');
            $table->string('sexo');
            $table->string('nacionalidad');
            $table->string('estadoCivil');
            $table->string('updated_at');
            $table->string('created_at');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('personas');
    }
}
