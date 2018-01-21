<?php

namespace sistema;

use Illuminate\Database\Eloquent\Model;

class Social extends Model
{
    protected $table="red_social";

    protected $fillable=['becad_id','facebook', 'twitter', 'instagram'];

    public function becado(){

    	return $this->belongsTo('sistema/Becado');
    }
}
