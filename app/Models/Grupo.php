<?php

namespace luj;

use Illuminate\Database\Eloquent\Model;

class Grupo extends Model
{
protected $table = 'grupos';

	/*********************************** RELACIONES ***********************************/
	//Uno a muchos)
	public function modalidad() {
		return $this->belongsTo('App\Models\Modalidad');
	}

	public function partidos() {
        return $this->belongsToMany('App\Models\Partido')->orderBy('fecha_hora', 'desc');
	}

    //Muchos a muchos
 	public function jornadas() {
        return $this->belongsToMany('App\Models\Jornada')->orderBy('num_jornada', 'asc');
	}

	public function competidores() {
		return $this->belongsToMany('App\Models\Competidores')->withTimestamps()->withPivot('p_a_favor', 'p_en_contra', 'partidos_totales', 'p_ganados', 'p_empatados', 'p_perdidos')->orderBy('puntuacion', 'desc')->orderBy('diferencia', 'desc');
	}
/*
	//Para acceder a los datos de la tabla pivote Equipo-Grupos
	public function newPivot(Eloquent $parent, array $attributes, $table, $exists) {
        if ($parent instanceof Equipo) {
            return new EquipoGrupo($parent, $attributes, $table, $exists);
        }
        return parent::newPivot($parent, $attributes, $table, $exists);
    }
*/
	/*********************************** FUNCIONES ***********************************/
	public function getEquipo($equipo){
		return $this->equipos->find($equipo);
	}
	public function getJornada($jornada){
		return $this->jornadas->find($jornada);
	}

}