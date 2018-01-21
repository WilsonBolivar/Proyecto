<?php

namespace sistema;

use Illuminate\Database\Eloquent\Model;

class Email extends Model
{
    protected $table="email";

    protected $fillable=['correo'];

    public function Representantes(){

    	return $this->hasMany('sistema\Representante');



    }
}
