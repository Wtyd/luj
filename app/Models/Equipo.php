<?php

namespace luj;

use Illuminate\Database\Eloquent\Model;

class Equipo extends Model
{
    /*********************************** RELACIONES ***********************************/
	//Hay una relacion entre equipos-individuales-modalidades


	public function modalidades() {
		return $this->hasMany('App\Models\Modalidades');
	}
	//muchos tipos de funciones (individuales que pertenezcan a un equipo-modalidad, individuales a lo largo de la historia de un equipo-competicion...)
	public function individuales() {
		return $this->hasMany('App\Models\Individual');
	}

}
