<?php

namespace luj\Models;

use Illuminate\Database\Eloquent\Model;

class Partido extends Model
{
	/*********************************** RELACIONES ***********************************/
    //Uno a muchos
	public function jornada() {
		return $this->belongsTo('luj\Models\Jornada');
	}

	public function grupo() {
		return $this->belongsTo('luj\Models\Grupo');
	}
	
	public function videos() {
		return $this->hasMany('luj\Models\Video');
	}
	
	public function video() {
		return $this->has('luj\Models\Video');
	}

	public function local() {
		return $this->belongsTo('luj\Models\Competidor', 'equipo_local_id');
	}

	public function visitante() {
		return $this->belongsTo('luj\Models\Competidor', 'equipo_visitante_id');
	}

/*
	//Establece la puntuación según la competición
	public function puntuacion(Model $parent, array $attributes, $table, $exists){
    	return new Puntuacion($parent, $attributes, $table, $exists);
	}
*/
	/*********************************** FUNCIONES ***********************************/
    //Uno a muchos
	public function scopePartidosPorClubGrupo($query, $club, $grupo){
        $query->where('grupo_id', '=', $grupo)
				->where(function ($query) use ($club){
		    		$query->where('equipo_local_id', '=', $club)
		          	->orWhere('equipo_visitante_id','=', $club);
				})->get();
		return $query;
	}
	
	//{{$e->partidos}}
	/*
	$query->where('grupo_id', '=', $grupo)
		        ->where(function($query, $club)
		            {
		                $query->where('equipo_local_id', '=', $club)
		                      ->orWhere('equipo_visitante_id','=', $club);
		            })
		            ->get();
		            
<td>{{count(Partido::PartidosPorClubGrupo($e->id, $g->id))}}</td> 
		            */

}
