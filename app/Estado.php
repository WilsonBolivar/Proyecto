<?php

namespace sistema;

use Illuminate\Database\Eloquent\Model;

class Estado extends Model
{
    protected $table="estado_muni";

    protected $fillable=['estado', 'municipio'];

   /* public function representantes(){

    	return $this->hasMany('sistema\Representante');
    }*/

     public function becados(){


    	return $this->hasMany('sistema\Estado');	

    }

}
