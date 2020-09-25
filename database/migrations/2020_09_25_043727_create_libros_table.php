<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateLibrosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
          //MIGRACION DE AUTORES
        Schema::create('autors', function (Blueprint $table) {
            $table->id();
          
            $table->string('hejr_nombres')->nullable();
            $table->string('hejr_apellidos')->nullable();
            $table->string('hejr_tipo_dni')->nullable();
            $table->string('hejr_dni')->nullable();
            $table->string('hejr_sexo')->nullable();
            $table->date('hejr_fecha_autor')->nullable();
            $table->string('hejr_email')->nullable();
            $table->string('hejr_estado')->default('A');
            $table->timestamps();
        });
         //MIGRACION DE EDITORIAL

         Schema::create('editorials', function (Blueprint $table) {
            $table->id();
            $table->string('hejr_nombre')->nullable();
            $table->string('hejr_email')->nullable();
            $table->string('hejr_estado')->default('A');

          
            $table->timestamps();
        });

          //MIGRACION DE LIBROS
         Schema::create('libros', function (Blueprint $table) {
            $table->id();
            $table->foreignId('autor_id')->references('id')->on('Autors')->nullable();
            $table->foreignId('editorial_id')->references('id')->on('Editorials')->nullable();
            $table->string('hejr_ISBN')->nullable();
            $table->string('hejr_titulo')->nullable();
            $table->string('hejr_anio')->nullable();
            $table->decimal('hejr_precio_venta',11,2)->nullable();
            $table->text('hejr_otros_autores')->nullable();
            $table->string('hejr_estado')->default('A');
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
        //eliminacin de las tablas para hacer una migracion reset
        Schema::dropIfExists('libros');
        Schema::dropIfExists('Autors');
        Schema::dropIfExists('Editorials');
    }
}
