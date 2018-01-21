<?php

namespace sistema;

use Illuminate\Database\Eloquent\Model;

class Institucion extends Model
{
    protected $table="instituciones";

    protected $fillable=['nombre_institucion'];



    public function becados(){


    	return $this->hasMany('sistema\Becado');	

    }
}
