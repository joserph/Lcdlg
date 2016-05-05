<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePredicadoresTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('predicadores', function (Blueprint $table) {
            $table->increments('id');

            $table->string('nombre');
            $table->string('url');//Eliminar
            $table->integer('id_user');
            $table->string('tipo');//Eliminar
            $table->integer('update_user');

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
        Schema::drop('predicadores');
    }
}
