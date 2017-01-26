<?php

namespace luj\Models;

use Illuminate\Database\Eloquent\Model;

class Jornada extends Model
{
	protected $touches = ['modalidad'];
    /*********************************** RELACIONES ***********************************/
    //Uno a muchos)
	public function modalidad() {
		return $this->belongsTo('luj\Models\Modalidad');
	}

	public function partidos() {
		return $this->hasMany('luj\Models\Partido');
	}

	//Muchos a muchos
	public function grupos() {
		return $this->belongsToMany('luj\Models\Grupo')->withTimestamps();
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
