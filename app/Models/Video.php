<?php

namespace luj\Models;

use Illuminate\Database\Eloquent\Model;

class Video extends Model
{
    /*********************************** RELACIONES ***********************************/
	//Video-Servidor (uno a muchos)
	public function servidor() {
		return $this->belongsTo('luj\Models\Servidor');
	}

	//Video-Partido (uno a muchos)
	public function partido() {
		return $this->belongsTo('luj\Models\Partido');
	}

	//Video-Comentario (uno a muchos)
	public function comentarios() {
		return $this->hasMany('luj\Models\Comentario');
	}

	//Video-Incidencia (uno a muchos)
	public function incidencias() {
		return $this->hasMany('luj\Models\Incidencia');
	}

	/*********************************** FUNCIONES ***********************************/
	public function iFrame(){
		//opciones del video

		$cadena = "<iframe class='embed-responsive-item' src='https://www.youtube.com/embed/".$this->enlace."' allowfullscreen ></iframe>";
		return $cadena;
	}
	public function direccion(){
		return "https://youtu.be/".$this->enlace;
	}

	static public function scopeVideosPorFecha($query){
       $query = DB::table('videos')
        ->leftJoin('partidos', 'partido_id', '=', 'partidos.id')
        ->orderBy('partidos.fecha_hora', 'desc')
        ->select('videos.id')
        ->get();
        //la consulta devuelve un array
        //Busco cada objeto en el modelo para devolver un array del modelo Video
        $videos = array();
        foreach($query as $v){
			array_push($videos, Video::find($v->id));
		}
        return $videos;
	}


}
