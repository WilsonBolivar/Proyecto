<?php

namespace sistema;

use Illuminate\Database\Eloquent\Model;

class Representante extends Model
{
    protected $table="representante";

    protected $fillable=['nacionali_id', 'parro_id', 'estado_id', 'email_id', 'tele_id', 'dire_id', 'cedula', 'nombre1', 'nombre2', 'apellido1', 'apellido2', 'genero', 'fecha_n'];


    public function Nacionalidad(){

    	return $this->belongsTo('sistema\Nacionalidad');


    }

    public function email(){

    	return $this->hasMany('sistema\Email');

    }


   /* public function parroquia_ciudad(){


    	return $this->belongsTo('sistema\Parroquia');
    }

    public function direccion(){


    	return $this->belongsTo('sistema\Direccion');
    }

    public function estado(){

        return $this->belongsTo('sistema\Estado');

    }

    */

    public function cuentas_banco(){

    	return $this->hasMany('sistema\Cuenta');
    }

    public function profesiones(){

    	return $this->belongsToMany('sistema/ProfeRepre');
    }

    public function telefonos(){

    	return $this->belongsToMany('sistema\Telefono');
    }

    public function becados(){

        return $this->belongsTo('sistema\Becado');
    }
}
