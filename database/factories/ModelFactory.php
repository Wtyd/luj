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
    return [
        'nombre' => $nombre,
        'imagen' => $nombre.'.png',
        'pais_id' => $faker->numberBetween(1, 16),
        'deporte_id' => $faker->numberBetween(1, 3),
    ];
});


$factory->define(luj\Models\Equipo::class, function (Faker\Generator $faker) {
    return [
   		'competidor_id' => 1,
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


