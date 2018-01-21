<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class RedesSociales extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('red_social', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('becad_id')->unsigned();
            $table->string('facebook', 50);
            $table->string('twitter', 50);
            $table->string('instagram', 50);


            $table->foreign('becad_id')->references('id')->on('becados');
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
        Schema::dropIfExists('red_social');
    }
}
