<?php

namespace luj\Models;

use Illuminate\Database\Eloquent\Model;

class Modalidad extends Model
{
    protected $table='modalidades';
    
    /*********************************** RELACIONES ***********************************/
	//Ternaria con individual y equipo
    public function individuales(){
    	return $this->belongsToMany('Individual');
  	}

  	public function equipos(){
    	return $this->belongsToMany('Equipo');
  	}

	//Modalidad-Jornadas (muchos a muchos)
 	public function jornadas() {
        return $this->hasMany('luj\Models\Jornada')->orderBy('num_jornada', 'asc');
	}

	//Modalidad-Grupos (muchos a muchos)
 	public function grupos() {
        return $this->hasMany('luj\Models\Grupo');
	}

	//Modalidad-Competidroes (muchos a muchos)
 	public function competidores() {
        return $this->belongsToMany('luj\Models\Competidor')->orderBy('nombre', 'asc')->orderBy('id', 'desc');
	}

	//Modalidad-Tipo Competicion (uno a muchos)
	public function tcompeticion() {
		return $this->belongsTo('Tcompeticion');
	}

	//SCOPES
	public function scopeMasReciente() {
        return $query->where('id', 'max');
	}

	/*********************************** FUNCIONES ***********************************/
	public function logo(){
		$path = 'img/competiciones/';
		return $path;
	}
	public function fecha_inicio(){	
		//como la fecha es '2014-01-01' substr devuelve los 4 primeros car
		return substr($this->anyo, 0, 4);
	}
	public function getEquipo($equipo){
		return $this->equipos->find($equipo);
	}

	public function scopeClubsPorPais($query){
		return $query=$this->pais->equipos->where('seleccion', '=', false)->get();

	}

	public function actualizaJornadas($partidos){
		DB::table('jornadas')
            ->where('competicion_id', $this->id)
            ->update(array('num_partidos' => $partidos));
	}

	//Devuelve true si la competicion ha comenzado.
	//Esto es si tiene partidos
	public function comenzada(){
		$encontrado = false;
		foreach($this->jornadas as $j){
			if(count($j->partidos) > 0){
				$encontrado = true;
				break;
			}
		}
		return $encontrado;
	}

}
/* Insertar en relacion m:m
Método 1: $competicion->equipos()->save($id_equipo);
Método 2: $competicion->equipos()->attach($id_equipo);

Para meter varios valores de una tacada
$materia = Materia::find(2); //La materia en la se inscribió;
$materia->alumnos()->sync(array(1, 2, 3, 4)); // Se ligan los alumnos 1, 2, 3 y 4 a la materia

Eliminar
$competicion->equipos()->detach($id_equipo);

Acceder a tablas pivote
$equipo->grupos->pivot->columna_extra;
*/
