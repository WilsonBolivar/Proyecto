<?php

namespace sistema;

use Illuminate\Database\Eloquent\Model;

class Beca extends Model
{
    protected $table="becas";

    protected $fillable=['posee_beca', 'tipo_beca'];



    public function becados(){


    	return $this->hasMany('sistema\Becado');	

    }

}
