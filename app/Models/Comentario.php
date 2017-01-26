<?php

namespace luj\Models;

use Illuminate\Database\Eloquent\Model;

class Comentario extends Model
{
	//Comentario-Usuario (uno a muchos)
	public function usuario() {
		return $this->belongsTo('luj\Models\User');
	}
	/*
	Si seguimos las convenciones de laravel la clave ajena hacia usuario sera user_id y el modelo la aplica automaticamente. Si se nombrara de otra forma tendriamos que pasar un segundo parametro con la CAje.
	public function usuario() {
		return $this->belongsTo('User', 'CAje');
	}
	*/

	//Comentario-Usuario (uno a muchos)
	public function video() {
		return $this->belongsTo('luj\Models\Video');
	}
}
