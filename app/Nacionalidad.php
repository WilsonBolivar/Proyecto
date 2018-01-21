<?php

namespace sistema;

use Illuminate\Database\Eloquent\Model;

class Nacionalidad extends Model
{
    //


    protected $table="nacionalidad";

    protected $fillable= ['nacionalidad', 'nacionalidad2'];


    public function representantes(){


    	return $this->hasMany('sistema\Nacionalidad');	

    }

 	public function becados(){


    	return $this->hasMany('sistema\Nacionalidad');	

    }


}
