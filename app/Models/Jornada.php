<?php

namespace luj;

use Illuminate\Database\Eloquent\Model;

class Jornada extends Model
{
    /*********************************** RELACIONES ***********************************/
    //Uno a muchos)
	public function modalidad() {
		return $this->belongsTo('App\Models\Modalidad');
	}

	public function partidos() {
		return $this->hasMany('App\Models\Partido');
	}

	//Muchos a muchos
	public function grupos() {
		return $this->belongsToMany('App\Models\Grupo');
	}

	//Si el competidor aun no ha jugado en esa jornada
	public function competidorLibre($competidor){
		$libre = true;

		foreach($this->partidos as $p){
			if($p->equipo_local_id == $competidor || $p->equipo_visitante_id == $competidor){
				$libre=false;
			}
		}
		return $libre;
	}
}
