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
            $table->integer('id_user');
            $table->string('tipo');//colocar enum('predica', 'post')
            $table->integer('update_user');
            $table->string('audio');
            $table->string('video');
            $table->string('f_name');
            $table->string('f_ruta');
            $table->string('f_exten');
            $table->string('comentario');//Hacer una tabla (Eliminar)

            $table->integer('id_predicador')->unsigned();
            $table->foreign('id_predicador')->references('id')->on('predicadores');
            $table->integer('id_mes')->unsigned();
            $table->foreign('id_mes')->references('id')->on('fechas');
            $table->integer('id_anio')->unsigned();
            $table->foreign('id_anio')->references('id')->on('fechas');
            // NO HE REALIZADO LA MIGRACION YA QUE DEBO ANALIZAR MEJOR EL MODEO DE LA DB.

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
