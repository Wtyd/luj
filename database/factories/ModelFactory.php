<?php

/*
|--------------------------------------------------------------------------
| Model Factories
|--------------------------------------------------------------------------
|
| Here you may define all of your model factories. Model factories give
| you a convenient way to create models for testing and seeding your
| database. Just tell the factory how a default model should look.
|
*/



$factory->define(luj\Models\User::class, function (Faker\Generator $faker) {
    static $password;

    return [
        'name' => $faker->name,
        'last_name' => $faker->lastName,
        'photo' => 'http://localhost/luj/public/img/usuarios/'.$faker->numberBetween(2, 10).'.jpg',
        'email' => $faker->unique()->safeEmail,
        'password' => $password ?: $password = bcrypt('secret'),
        'remember_token' => str_random(10),
    ];
});

$factory->define(luj\Models\Pais::class, function (Faker\Generator $faker) {
	$nombre = substr($faker->country,0,19);//Por si da nombres muy largos
    return [
        'nombre' => $nombre, 
        'nombre_corto' => $faker->languageCode,
        'bandera' => $nombre.'.png',
    ];
});

$factory->define(luj\Models\Competidor::class, function (Faker\Generator $faker) {
	$nombre = substr($faker->country,0,49);
    $pais = luj\Models\Pais::where('nombre', 'España')->first()->id;
    return [
        'nombre' => $nombre,
        'imagen' => $nombre.'.png',
        'competible_id' => $faker->numberBetween(1, 16),
        'competible_type' => 'luj\Models\Equipo',
        'pais_id' => $pais,
        'deporte_id' => $faker->numberBetween(1, 3),
    ];
});
/*$factory->state(luj\Models\Competidor::class, $pais, function ($faker) {
    //$pais = luj\Models\Pais::where('nombre', 'España')->first();
    return [
        'pais_id' => $pais->id,
    ];
});*/

$factory->define(luj\Models\Equipo::class, function (Faker\Generator $faker) {
    return [
        'seleccion' =>  false,
        'acronimo' => str_random(3),
    ];
});



$factory->define(luj\Models\Grupo::class, function (Faker\Generator $faker) {
    return [
        'nombre' => $faker->firstName,
        'num_jornadas' =>  $faker->numberBetween(1, 3),
        'num_equipos' => $faker->numberBetween(1, 3),
        'modalidad_id' =>  $faker->numberBetween(1, 3),        
    ];
});

$factory->define(luj\Models\Jornada::class, function (Faker\Generator $faker) {
    return [
        'nombre' => 'Jornada',
        'num_jornada' =>  $faker->numberBetween(1, 3),
        'num_partidos' => $faker->numberBetween(1, 3),
        'partidosXronda' => 1,
        'fecha_inicio' => '08/21/2015',     
        'fecha_fin' => '08/23/2015',
        'modalidad_id' =>  $faker->numberBetween(1, 3),
    ];
});

$factory->define(luj\Models\Video::class, function (Faker\Generator $faker) {

    return [
        'nombre' => $faker->sentence($nbWords = 2, $variableNbWords = true),
        'enlace' => 'www.esunenlace.com',
        'principal' => true,
        /*'partido_id' => $faker->numberBetween(1, 3),
        'servidor_id' => $faker->numberBetween(1, 3),*/
    ];
});

$factory->define(luj\Models\Servidor::class, function (Faker\Generator $faker) {
    static $password;

    return [
        'nombre' => 'Youtube',
        'logo' => 'youtube.png',
    ];
});



$factory->define(luj\Models\Partido::class, function (Faker\Generator $faker) {
    static $password;

    return [
        'estado' => 'oculto',
        'descripcion_l' => null,
        'descripcion_v' => null,

/*
            $table->integer('puntos_l');
            $table->integer('puntos_v');
            $table->datetime('fecha_hora');
            $table->integer('competidor_local_id')->unsigned();
            $table->foreign('competidor_local_id')->references('id')->on('competidores');
            $table->integer('competidor_visitante_id')->unsigned();
            $table->foreign('competidor_visitante_id')->references('id')->on('competidores');
            $table->integer('jornada_id')->unsigned();
            $table->foreign('jornada_id')->references('id')->on('jornadas');
            $table->integer('grupo_id')->unsigned();
            $table->foreign('grupo_id')->references('id')->on('grupos');*/
    ];
});
