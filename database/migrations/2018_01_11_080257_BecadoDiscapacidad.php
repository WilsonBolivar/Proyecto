<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class BecadoDiscapacidad extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
       
        Schema::create('becarios_disca', function (Blueprint $table) {
            $table->integer('becados_id')->unsigned();
            $table->integer('disca_id')->unsigned();
            $table->timestamps();
         

            $table->foreign('becados_id')->references('id')->on('becados');
            $table->foreign('disca_id')->references('id')->on('discapacidad');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('becado_disca');
    }
}
