<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePredicasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('predicas', function (Blueprint $table) {
            $table->increments('id');

            $table->string('title');
            $table->string('url');//Cambiar a slug
            $table->string('predicador');//Eliminar
            $table->string('mes');//Eliminar
            $table->string('anio');//Eliminar
            $table->string('fecha');//Cambiar a date
            $table->string('content', 50000);
            $table->string('estatus');
            $table->integer('id_user')->unsigned();
            $table->string('tipo');//colocar enum('predica', 'post')
            $table->integer('update_user');
            $table->string('audio');
            $table->string('video');
            $table->string('f_name');
            $table->string('f_ruta');
            $table->string('f_exten');
            $table->string('comentario');//Hacer una tabla (Eliminar)
            $table->integer('predicador_id')->unsigned();            
            $table->integer('mes_id')->unsigned();            
            $table->integer('anio_id')->unsigned();

            $table->foreign('id_user')->references('id')->on('users');
            $table->foreign('predicador_id')->references('id')->on('predicadores');
            $table->foreign('mes_id')->references('id')->on('fechas');
            $table->foreign('anio_id')->references('id')->on('fechas');
            // intentar borrar el slug de fechas y de predicador para ver si funcionan las relaciones.

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
        Schema::drop('predicas');
    }
}
