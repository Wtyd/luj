<?php

namespace luj\Models;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    /*********************************** CONFIG ***********************************/
    use Notifiable;
    //Estos ultimos son necesarios para la autenticacion?
    //use UserTrait, RemindableTrait;

    protected $fillable = [
        'name', 'email', 'password',
    ];

    protected $hidden = [
        'password', 'remember_token',
    ];

    /*********************************** RELACIONES ***********************************/
    //Muchos a muchos
    public function competidores() {
        return $this->belongsToMany('luj\Models\Competidor');
    }

    //Uno a muchos
    public function incidencias() {
        return $this->hasMany('luj\Models\Incidencia');
    }

    public function comentarios() {
        return $this->hasMany('luj\Models\Comentario');
    }

    /*********************************** FUNCIONES ***********************************/
    public static function isLogged()
    {
        if(Session::has('user_id'))
            return true;
        else
            return false;
    }

    public static function isAdmin()
    {
        if(Session::has('admin')==1)
            return true;
        else
            return false;
    }
}
