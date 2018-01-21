<?php

namespace sistema;

use Illuminate\Database\Eloquent\Model;

class BecadoDisca extends Model
{
    protected $table="becarios_disca";

    protected $fillable=['becados_id','disca_id'];


    public function discapacidades(){


    	return $this->belongsToMany('sistema\Discapacidad');

    	
    }


    public function becados(){

    	return $this->belongsToMany('sistema/Becados');
    }
}
