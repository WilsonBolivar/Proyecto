<?php

namespace sistema;

use Illuminate\Database\Eloquent\Model;

class Parroquia extends Model
{
   protected $table="parroquia";

   protected $fillable=['parroquia', 'ciudad'];

  /* function representantes(){

   	return $this->hasMany('sistema\Representante');
   }*/


    public function becados(){


    	return $this->hasMany('sistema\Becado');	

    }


   
}
