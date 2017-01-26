<?php

namespace luj\Models;

use Illuminate\Database\Eloquent\Model;

class Competicion extends Model
{
	protected $table = 'competiciones';

	/*********************************** RELACIONES ***********************************/
	//Uno a muchos
	public function tcompeticion() {
		return $this->belongsTo('luj\Models\Tcompeticion');
	}

	public function modalidades() {
		return $this->hasMany('luj\Models\Modalidad');
	}
}

