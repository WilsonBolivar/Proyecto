<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CuentaBanco extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cuenta_banco', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('repre_id')->unsigned();
            $table->double('nro_cuenta')->unique();
            $table->string('tipo_cuenta', 20);

            $table->foreign('repre_id')->references('id')->on('representante');

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
        Schema::dropIfExists('cuenta_banco');
    }
}
