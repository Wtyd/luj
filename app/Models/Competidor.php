<?php

namespace luj\Models;

use Illuminate\Database\Eloquent\Model;

class Competidor extends Model
{
    protected $table='competidores';
	/*********************************** RELACIONES ***********************************/
	//Uno a muchos
	public function pais() {
		return $this->belongsTo('luj\Models\Pais');
	}

	public function deporte() {
		return $this->belongsTo('luj\Models\Deporte');
	}

	//Muchos a muchos
	public function modalidades() {
		return $this->belongsToMany('luj\Models\Modalidad');
	}

	public function usuarios() {
		return $this->belongsToMany('luj\Models\User', 'user_id');
	}

	public function grupos() {
		return $this->belongsToMany('luj\Models\Grupo')->withTimestamps()->withPivot('p_a_favor', 'p_en_contra', 'partidos_totales', 'p_ganados', 'p_empatados', 'p_perdidos');
	}

	//Uno a uno
	public function equipo() {
		return $this->hasOne('luj\Models\Equipo');
	}

	public function individual() {
		return $this->hasOne('luj\Models\Equipo');
	}
/*
	//Para acceder a los datos de la tabla pivote Equipo-Grupos
	public function newPivot(Eloquent $parent, array $attributes, $table, $exists) {
        if ($parent instanceof Grupo) {
            return new EquipoGrupo($parent, $attributes, $table, $exists);
        }
        return parent::newPivot($parent, $attributes, $table, $exists);
    }*/

	//Uno a muchos
	public function partidos() {
		return $this->hasMany('luj\Models\Partido');
	}

	/*********************************** FUNCIONES ***********************************/
	public function escudo(){	//Funcion relacionada con otra en EquipoController
		if ($this->seleccion == false ) { //Si el equipo es un club
			return 'img/escudos/'.$this->pais->nombre_corto.'/'.$this->deporte_id.'/'.$this->escudo;
		}
		else {	//el equipo es una selección
			$path = 'img/banderas/'.$this->pais->bandera;
			return $path;
		}	
	}

	//Funcion relacionada con Equipo::escudo(). Se invoca mediante Equipo::path_escudo()
	//Tiene que tener el atributo static
	public static function path_escudo($pais_id, $deporte_id){	
		$pais = Pais::find($pais_id);
		return 'img/escudos/'.$pais->nombre_corto.'/'.$deporte_id.'/';
	}

	public function scopeClubs($query){
 		return $query->where('seleccion', '=', false);
	}
	public function scopeDelPais($query, $pais){
        return $query->where('pais_id', '=', $pais);
    }
    public function scopeDelDeporte($query, $deporte){
        return $query->where('deporte_id', '=', $deporte);
    }
    public function scopePartidosPorGrupo($query, $grupo){
        
		    $query=DB::table('partidos')->where('equipo_local_id', '=', $this->id)
			->orWhere('equipo_visitante_id','=', $this->id)
		    ->get();
		          	

		return $query;
	}

	/*
$query = DB::table('partidos')->where('grupo_id', '=', $grupo)
				->where(function ($query){
		    		$query=DB::table('partidos')->where('equipo_local_id', '=', $this->id);
		          	->orWhere('equipo_visitante_id','=', $this->id);
				})->get();
		return $query;


		{{$p=$e->partidosPorGrupo(8)}}
                          @if(true)
                            {{--$p->descripcion--}}
                          @else
                            0
                          @endif
	*/
}
