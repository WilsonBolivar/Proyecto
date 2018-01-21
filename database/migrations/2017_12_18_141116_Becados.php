<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Becados extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('becados', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('repre_id')->unsigned();
            $table->integer('nacionalidad_id')->unsigned();
            $table->integer('estado_id')->unsigned();
            $table->integer('parro_id')->unsigned();
            $table->integer('dire_id')->unsigned();
            $table->integer('beca_id')->unsigned();
            $table->integer('intitu_id')->unsigned();
            $table->integer('cedulab')->unique();
            $table->string('nombre1b', 60);
            $table->string('nombre2b', 60);
            $table->string('apellido1b', 60);
            $table->string('apellido2b', 60);
            $table->char('generob', 2);
            $table->date('fecha');

            $table->foreign('repre_id')->references('id')->on('representante');
            $table->foreign('nacionalidad_id')->references('id')->on('nacionalidad');
            $table->foreign('estado_id')->references('id')->on('estado_muni');
            $table->foreign('parro_id')->references('id')->on('parroquia');
            $table->foreign('dire_id')->references('id')->on('direccion');
            $table->foreign('beca_id')->references('id')->on('becas');
            $table->foreign('intitu_id')->references('id')->on('instituciones');
           


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
        Schema::dropIfExists('becados');
    }
}
