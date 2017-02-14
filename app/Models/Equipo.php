<?php

namespace luj\Models;

use Illuminate\Database\Eloquent\Model;

class Equipo extends Model
{
    /*********************************** RELACIONES ***********************************/
	//Hay una relacion entre equipos-individuales-modalidades

    //Es un, heredera
    public function competidor()
    {
        return $this->morphOne('luj\Models\Competidor', 'competible');
    }

    //Ternaria con individual y modalidades
    public function jugadores(){
    	return $this->belongsToMany('Individual');
  	}

  	public function participaciones(){
    	return $this->belongsToMany('Modalidad', 'equipo_individual_modalidad');
  	}

	public function modalidades() {
		return $this->hasMany('luj\Models\Modalidades');
	}
	//muchos tipos de funciones (individuales que pertenezcan a un equipo-modalidad, individuales a lo largo de la historia de un equipo-competicion...)
	public function individuales() {
		return $this->hasMany('luj\Models\Individual');
	}

}
