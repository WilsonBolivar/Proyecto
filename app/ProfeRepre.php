<?php

namespace sistema;

use Illuminate\Database\Eloquent\Model;

class ProfeRepre extends Model
{
    
     protected $table="profe_repres";

    protected $fillable=['repres_id', 'prof_id'];


     public function representantes(){

    	return $this->belongsToMany('sistema\Representante');
    }
}
