<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class ProfesionRepresentante extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
         Schema::create('profe_repres', function (Blueprint $table) {
            $table->integer('repres_id')->unsigned();
            $table->integer('prof_id')->unsigned();
            $table->timestamps();

            $table->foreign('repres_id')->references('id')->on('representante');
            $table->foreign('prof_id')->references('id')->on('profesiones');



        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('Profe_repre');
    }
}
