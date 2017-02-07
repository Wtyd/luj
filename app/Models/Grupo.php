<?php

namespace luj\Models;

use Illuminate\Database\Eloquent\Model;

class Grupo extends Model
{
protected $table = 'grupos';

	/*********************************** RELACIONES ***********************************/
	//Uno a muchos)
	public function modalidad() {
		return $this->belongsTo('luj\Models\Modalidad');
	}

	public function partidos() {
        return $this->belongsToMany('luj\Models\Partido')->orderBy('fecha_hora', 'desc');
	}

    //Muchos a muchos
 	public function jornadas() {
        return $this->belongsToMany('luj\Models\Jornada')->orderBy('num_jornada', 'asc')->withTimestamps();
	}

	public function competidores() {
		return $this->belongsToMany('luj\Models\Competidor')->withTimestamps()->withPivot('p_totales', 'p_a_favor', 'p_en_contra', 'diferencia_p', 'partidos_totales', 'p_ganados', 'p_empatados', 'p_perdidos')->orderBy('p_totales', 'desc')->orderBy('diferencia_p', 'desc');
	}

	/*********************************** FUNCIONES ***********************************/
	public function getEquipo($equipo){
		return $this->equipos->find($equipo);
	}
	public function getJornada($jornada){
		return $this->jornadas->find($jornada);
	}

}