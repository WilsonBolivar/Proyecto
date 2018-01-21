<?php

namespace sistema;

use Illuminate\Database\Eloquent\Model;

class Direccion extends Model
{
    protected $table="direccion";

    protected $fillable=['direccion'];


    public function becados(){

    	return $this->hasMany('sistema/Becados');


    }
}
