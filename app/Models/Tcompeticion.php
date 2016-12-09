<?php

namespace luj;

use Illuminate\Database\Eloquent\Model;

class Tcompeticion extends Model
{
    protected $table='tcompeticiones';

    /*********************************** RELACIONES ***********************************/
	//Uno a muchos
	public function pais() {
		return $this->belongsTo('App\Models\Pais');
	}

	public function deporte() {
		return $this->belongsTo('App\Models\Deporte');
	}

 	public function competiciones() {
        return $this->hasMany('App\Models\Competicion');
    }


	/*********************************** FUNCIONES ***********************************/
	public function logo(){
		$path = 'img/competiciones/'.$this->pais->nombre_corto.'/'.$this->deporte_id.'/';
		return $path.$this->logo;
	}
	public static function pathLogo($pais_id, $deporte_id){	
		$pais = Pais::find($pais_id);
		return 'img/competiciones/'.$pais->nombre_corto.'/'.$deporte_id.'/';
	}

	//Devuelve todos los equipos que podrian participar en el tipo de competicion
	public function scopeCompetidores($query){
			//de esta forma no devuelve el tipo equipo y hay problemas a la hora de mostrar datos
		    //$query=DB::table('equipos')->where('pais_id', '=', $this->pais_id);
			//->where('deporte_id','=', $this->deporte_id)
			//->where('seleccion', '=', false); //que sean clubes
		    //->get();   
		    $query=Competidor::delPais($this->pais_id)->delDeporte($this->deporte_id)->clubs();    	
		return $query;
	}

	//funcion que me devuelve de cada Tcompeticion su competicion más reciente (la actual) (No se usa)
	static public function competicionesReciente(){
		$query = DB::table('competiciones')
               ->select(DB::raw('id, max(anyo) as year,tcompeticion_id'))
               ->groupBy('tcompeticion_id')
               //->orderBy('paper_update', 'desc')
               ->get();

        $comps = array();
        foreach($query as $c){
			array_push($comps, Competicion::find($c->id));
		}
        return $comps;
	}

	//Devuelve la competicion mas reciente del tipo de competicion
	public function competicionReciente(){
		$comp = Competicion::find($this->competiciones->max('id'));

		return $comp;
		/*
		if($comp->comenzada())
			return $comp;
		else{
			/*$comp=Competicion::where('id', '<', $comp->id)
			->Where('tcompeticion_id', '=', $comp->tcompeticion_id)
			->max('id');x
			$c = DB::table('competiciones')
			->where('tcompeticion_id', $comp->tcompeticion_id)
			->whereBetween('id', array(1, $comp->id))
			->first();
			
			return $c;
		}*/
	}
}
