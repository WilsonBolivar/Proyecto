<?php

namespace sistema;

use Illuminate\Database\Eloquent\Model;

class Becado extends Model
{
    protected $table="becados";

    protected $fillable=['repre_id', 'nacionalidad_id', 'estado_id', 'parro_id', 'dire_id', 'beca_id', 'intitu_id', 'cedulab', 'nombre1b', 'nombre2b', 'apellido1b', 'apellido2b', 'generob', 'fecha'];


    public function nacionalidad(){

    	return $this->belongsTo('sistema/Nacionalidad');
    }


    public function estado(){

    	return $this->belongsTo('sistema/Estado');
    }

    public function beca(){

    	return $this->belongsTo('sistema/Beca');
    }


    public function redes_sociales(){


    	return $this->hasMany('sistema\Sociales');	

    }


    public function institucion(){

    	return $this->belongsTo('sistema/institucion');
    }


    public function discapacidades(){


    	return $this->belongsToMany('sistema\BecadoDisca');
    }

    public function representante(){

        return $this->hasMany('sistema\Representante');
    }


    public function parroquia(){

        return $this->belongsTo('sistema\Parroquia');
    }

    public function direccion(){

        return $this->belongsTo('sistema/Direccion');
    }

}
