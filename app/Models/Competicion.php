<?php

namespace luj;

use Illuminate\Database\Eloquent\Model;

class Competicion extends Model
{
	protected $table = 'competiciones';

	/*********************************** RELACIONES ***********************************/
	//Uno a muchos
	public function tcompeticion() {
		return $this->belongsTo('App\Models\Tcompeticion');
	}

	public function modalidades() {
		return $this->belongsToMany('App\Models\Modalidad');
	}
}

