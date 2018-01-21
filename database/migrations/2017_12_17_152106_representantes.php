<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Representantes extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('representante', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('nacionali_id')->unsigned();
            $table->integer('email_id')->unsigned();
            $table->integer('tele_id')->unsigned();
            $table->integer('Cedula')->unique();
            $table->string('nombre1', 60);
            $table->string('nombre2', 60);
            $table->string('apellido1', 60);
            $table->string('apellido2', 60);
            $table->char('genero', 2);
            $table->date('fecha_n');

            $table->foreign('nacionali_id')->references('id')->on('nacionalidad');
            $table->foreign('email_id')->references('id')->on('email');
            $table->foreign('tele_id')->references('id')->on('telefono');
        


            

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
        Schema::dropIfExists('representante');
    }
}
