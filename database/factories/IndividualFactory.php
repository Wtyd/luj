<?php

$factory->define(luj\Models\Individual::class, function (Faker\Generator $faker) {
    return [
        'competidor_id' => 1,
        'masculino' =>  $faker->boolean,        
    ];
});


//********************************** COMPETIDORES MASCULINOS **********************************
$factory->defineAs(luj\Models\Competidor::class, 'EspañaH', function (Faker\Generator $faker) {
    //$faker->addProvider(new Faker\Provider\es_ES\Person($faker));
    $faker = Faker\Factory::create('es_ES');
    $nombre = substr($faker->firstNameMale.' '.$faker->lastName,0,20);
    return [
        'nombre' => $nombre,
        'imagen' => str_replace(' ', '', $nombre.'.png'), //quita los espacios en blanco
        //'pais_id' => luj\Models\Pais::all()->random()->id,
        'pais_id' => luj\Models\Pais::where('nombre', 'España')->first()->id,
        'deporte_id' => $faker->numberBetween(1, 3),
    ];
});
$factory->defineAs(luj\Models\Competidor::class, 'FranciaH', function (Faker\Generator $faker) {
    $faker = Faker\Factory::create('fr_FR');
    $nombre = substr($faker->firstNameMale.' '.$faker->lastName,0,20);
    return [
        'nombre' => $nombre,
        'imagen' => str_replace(' ', '', $nombre.'.png'), //quita los espacios en blanco
        'pais_id' => luj\Models\Pais::where('nombre', 'Francia')->first()->id,
        'deporte_id' => $faker->numberBetween(1, 3),
    ];
});
$factory->defineAs(luj\Models\Competidor::class, 'ItaliaH', function (Faker\Generator $faker) {
    $faker = Faker\Factory::create('it_IT');
    $nombre = substr($faker->firstNameMale.' '.$faker->lastName,0,20);
    return [
        'nombre' => $nombre,
        'imagen' => str_replace(' ', '', $nombre.'.png'), //quita los espacios en blanco
        'pais_id' => luj\Models\Pais::where('nombre', 'Italia')->first()->id,
        'deporte_id' => $faker->numberBetween(1, 3),
    ];
});
$factory->defineAs(luj\Models\Competidor::class, 'PortugalH', function (Faker\Generator $faker) {
    $faker = Faker\Factory::create('pt_PT');
    $nombre = substr($faker->firstNameMale.' '.$faker->lastName,0,20);
    return [
        'nombre' => $nombre,
        'imagen' => str_replace(' ', '', $nombre.'.png'), //quita los espacios en blanco
        'pais_id' => luj\Models\Pais::where('nombre', 'Portugal')->first()->id,
        'deporte_id' => $faker->numberBetween(1, 3),
    ];
});
$factory->defineAs(luj\Models\Competidor::class, 'RumaniaH', function (Faker\Generator $faker) {
    $faker = Faker\Factory::create('ro_RO');
    $nombre = substr($faker->firstNameMale.' '.$faker->lastName,0,20);
    return [
        'nombre' => $nombre,
        'imagen' => str_replace(' ', '', $nombre.'.png'), //quita los espacios en blanco
        'pais_id' => luj\Models\Pais::where('nombre', 'Rumania')->first()->id,
        'deporte_id' => $faker->numberBetween(1, 3),
    ];
});
$factory->defineAs(luj\Models\Competidor::class, 'SueciaH', function (Faker\Generator $faker) {
    $faker = Faker\Factory::create('sv_SE');
    $nombre = substr($faker->firstNameMale.' '.$faker->lastName,0,20);
    return [
        'nombre' => $nombre,
        'imagen' => str_replace(' ', '', $nombre.'.png'), //quita los espacios en blanco
        'pais_id' => luj\Models\Pais::where('nombre', 'Suecia')->first()->id,
        'deporte_id' => $faker->numberBetween(1, 3),
    ];
});
$factory->defineAs(luj\Models\Competidor::class, 'EEUUH', function (Faker\Generator $faker) {
    $faker = Faker\Factory::create('en_US');
    $nombre = substr($faker->firstNameMale.' '.$faker->lastName,0,20);
    return [
        'nombre' => $nombre,
        'imagen' => str_replace(' ', '', $nombre.'.png'), //quita los espacios en blanco
        'pais_id' => luj\Models\Pais::where('nombre', 'EEUU')->first()->id,
        'deporte_id' => $faker->numberBetween(1, 3),
    ];
});

//********************************** COMPETIDORES FEMENINOS **********************************
$factory->defineAs(luj\Models\Competidor::class, 'EspañaM', function (Faker\Generator $faker) {
    $faker = Faker\Factory::create('es_ES');
    $nombre = substr($faker->firstNameFemale.' '.$faker->lastName,0,20);
    return [
        'nombre' => $nombre,
        'imagen' => str_replace(' ', '', $nombre.'.png'), //quita los espacios en blanco
        'pais_id' => luj\Models\Pais::where('nombre', 'España')->first()->id,
        'deporte_id' => $faker->numberBetween(1, 3),
    ];
});
$factory->defineAs(luj\Models\Competidor::class, 'FranciaM', function (Faker\Generator $faker) {
    $faker = Faker\Factory::create('fr_FR');
    $nombre = substr($faker->firstNameFemale.' '.$faker->lastName,0,20);
    
    return [
        'nombre' => $nombre,
        'imagen' => str_replace(' ', '', $nombre.'.png'), //quita los espacios en blanco
        'pais_id' => luj\Models\Pais::where('nombre', 'Francia')->first()->id,
        'deporte_id' => $faker->numberBetween(1, 3),
    ];
});
$factory->defineAs(luj\Models\Competidor::class, 'ItaliaM', function (Faker\Generator $faker) {
    $faker = Faker\Factory::create('it_IT');
    $nombre = substr($faker->firstNameFemale.' '.$faker->lastName,0,20);
    return [
        'nombre' => $nombre,
        'imagen' => str_replace(' ', '', $nombre.'.png'), //quita los espacios en blanco
        'pais_id' => luj\Models\Pais::where('nombre', 'Italia')->first()->id,
        'deporte_id' => $faker->numberBetween(1, 3),
    ];
});
$factory->defineAs(luj\Models\Competidor::class, 'PortugalM', function (Faker\Generator $faker) {
    $faker = Faker\Factory::create('pt_PT');
    $nombre = substr($faker->firstNameFemale.' '.$faker->lastName,0,20);
    return [
        'nombre' => $nombre,
        'imagen' => str_replace(' ', '', $nombre.'.png'), //quita los espacios en blanco
        'pais_id' => luj\Models\Pais::where('nombre', 'Portugal')->first()->id,
        'deporte_id' => $faker->numberBetween(1, 3),
    ];
});
$factory->defineAs(luj\Models\Competidor::class, 'RumaniaM', function (Faker\Generator $faker) {
    $faker = Faker\Factory::create('ro_RO');
    $nombre = substr($faker->firstNameFemale.' '.$faker->lastName,0,20);
    return [
        'nombre' => $nombre,
        'imagen' => str_replace(' ', '', $nombre.'.png'), //quita los espacios en blanco
        'pais_id' => luj\Models\Pais::where('nombre', 'Rumania')->first()->id,
        'deporte_id' => $faker->numberBetween(1, 3),
    ];
});
$factory->defineAs(luj\Models\Competidor::class, 'SueciaM', function (Faker\Generator $faker) {
    $faker = Faker\Factory::create('sv_SE');
    $nombre = substr($faker->firstNameFemale.' '.$faker->lastName,0,20);
    return [
        'nombre' => $nombre,
        'imagen' => str_replace(' ', '', $nombre.'.png'), //quita los espacios en blanco
        'pais_id' => luj\Models\Pais::where('nombre', 'Suecia')->first()->id,
        'deporte_id' => $faker->numberBetween(1, 3),
    ];
});
$factory->defineAs(luj\Models\Competidor::class, 'EEUUM', function (Faker\Generator $faker) {
    $faker = Faker\Factory::create('en_US');
    $nombre = substr($faker->firstNameFemale.' '.$faker->lastName,0,20);
    return [
        'nombre' => $nombre,
        'imagen' => str_replace(' ', '', $nombre.'.png'), //quita los espacios en blanco
        'pais_id' => luj\Models\Pais::where('nombre', 'EEUU')->first()->id,
        'deporte_id' => $faker->numberBetween(1, 3),
    ];
});