<?php

namespace sistema;

use Illuminate\Database\Eloquent\Model;

class Telefono extends Model
{
    protected $table="telefono";

    protected $fillable=['telefono_1', 'telefono_2'];

    public function Representantes(){


    	return $this->belongsToMany('sistema\Representante');
    }
}
