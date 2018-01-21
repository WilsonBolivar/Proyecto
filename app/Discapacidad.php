<?php

namespace sistema;

use Illuminate\Database\Eloquent\Model;

class Discapacidad extends Model
{
    protected $table="discapacidad";

    protected $fillable=['discapacidad','tipo_discapacidad'];


    public function becados(){


    	return $this->belongsToMany('sistema\ProfeRepre');
    }
}
