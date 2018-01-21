<?php

namespace sistema;

use Illuminate\Database\Eloquent\Model;

class Cuenta extends Model
{
    protected $table="cuenta_banco";

    protected $fillable=['repre_id', 'nro_cuenta', 'tipo_cuenta'];

    public function representante(){

    	return $this->belongsTo('sistema/representante');
    }
}

