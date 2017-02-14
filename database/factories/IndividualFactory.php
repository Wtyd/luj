<?php

$factory->define(luj\Models\Individual::class, function (Faker\Generator $faker) {
    return [
        'masculino' =>  $faker->boolean,        
    ];
});

//http://www.science.co.il/language/Locale-codes.php
//********************************** COMPETIDORES MASCULINOS **********************************
$factory->defineAs(luj\Models\Competidor::class, 'AlemaniaH', function (Faker\Generator $faker) {
    $faker = Faker\Factory::create('de_DE');
    $nombre = substr($faker->firstNameMale.' '.$faker->lastName,0,20);
    return [
        'nombre' => $nombre,
        'imagen' => str_replace(' ', '', $nombre.'.png'), //quita los espacios en blanco
        'pais_id' => luj\Models\Pais::where('nombre', 'Alemania')->first()->id,
        'deporte_id' => $faker->numberBetween(1, 3),
        'competible_id' => $faker->numberBetween(1, 3),
        'competible_type' => 'luj\Models\Individual',
    ];
});
$factory->defineAs(luj\Models\Competidor::class, 'CanadaH', function (Faker\Generator $faker) {
    $locale = rand(1, 2);
    if ($locale == 1)
        $faker = Faker\Factory::create('fr_CA');
    else $faker = Faker\Factory::create('en_CA');
    
    $nombre = substr($faker->firstNameMale.' '.$faker->lastName,0,20);
    return [
        'nombre' => $nombre,
        'imagen' => str_replace(' ', '', $nombre.'.png'), //quita los espacios en blanco
        'pais_id' => luj\Models\Pais::where('nombre', 'Canada')->first()->id,
        'deporte_id' => $faker->numberBetween(1, 3),
        'competible_id' => $faker->numberBetween(1, 3),
        'competible_type' => 'luj\Models\Individual',
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
        'competible_id' => $faker->numberBetween(1, 3),
        'competible_type' => 'luj\Models\Individual',
    ];
});

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
        'competible_id' => $faker->numberBetween(1, 3),
        'competible_type' => 'luj\Models\Individual',
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
        'competible_id' => $faker->numberBetween(1, 3),
        'competible_type' => 'luj\Models\Individual',
    ];
});
$factory->defineAs(luj\Models\Competidor::class, 'HolandaH', function (Faker\Generator $faker) {
    $faker = Faker\Factory::create('nl_NL');
    $nombre = substr($faker->firstNameMale.' '.$faker->lastName,0,20);
    return [
        'nombre' => $nombre,
        'imagen' => str_replace(' ', '', $nombre.'.png'), //quita los espacios en blanco
        'pais_id' => luj\Models\Pais::where('nombre', 'Holanda')->first()->id,
        'deporte_id' => $faker->numberBetween(1, 3),
        'competible_id' => $faker->numberBetween(1, 3),
        'competible_type' => 'luj\Models\Individual',
    ];
});
$factory->defineAs(luj\Models\Competidor::class, 'IndiaH', function (Faker\Generator $faker) {
    $locale = rand(1, 2);
    if ($locale == 1)
        $faker = Faker\Factory::create('bn_BN');
    else $faker = Faker\Factory::create('en_IN');
    $nombre = substr($faker->firstNameMale.' '.$faker->lastName,0,20);
    return [
        'nombre' => $nombre,
        'imagen' => str_replace(' ', '', $nombre.'.png'), //quita los espacios en blanco
        'pais_id' => luj\Models\Pais::where('nombre', 'India')->first()->id,
        'deporte_id' => $faker->numberBetween(1, 3),
        'competible_id' => $faker->numberBetween(1, 3),
        'competible_type' => 'luj\Models\Individual',
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
        'competible_id' => $faker->numberBetween(1, 3),
        'competible_type' => 'luj\Models\Individual',
    ];
});
$factory->defineAs(luj\Models\Competidor::class, 'MexicoH', function (Faker\Generator $faker) {
    $faker = Faker\Factory::create('es_MX');
    $nombre = substr($faker->firstNameMale.' '.$faker->lastName,0,20);
    return [
        'nombre' => $nombre,
        'imagen' => str_replace(' ', '', $nombre.'.png'), //quita los espacios en blanco
        'pais_id' => luj\Models\Pais::where('nombre', 'Mexico')->first()->id,
        'deporte_id' => $faker->numberBetween(1, 3),
        'competible_id' => $faker->numberBetween(1, 3),
        'competible_type' => 'luj\Models\Individual',
    ];
});
$factory->defineAs(luj\Models\Competidor::class, 'NoruegaH', function (Faker\Generator $faker) {
    $faker = Faker\Factory::create('no_NO');
    $nombre = substr($faker->firstNameMale.' '.$faker->lastName,0,20);
    return [
        'nombre' => $nombre,
        'imagen' => str_replace(' ', '', $nombre.'.png'), //quita los espacios en blanco
        'pais_id' => luj\Models\Pais::where('nombre', 'Noruega')->first()->id,
        'deporte_id' => $faker->numberBetween(1, 3),
        'competible_id' => $faker->numberBetween(1, 3),
        'competible_type' => 'luj\Models\Individual',
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
        'competible_id' => $faker->numberBetween(1, 3),
        'competible_type' => 'luj\Models\Individual',
    ];
});
$factory->defineAs(luj\Models\Competidor::class, 'RepChecaH', function (Faker\Generator $faker) {
    $faker = Faker\Factory::create('cz_CZ');
    $nombre = substr($faker->firstNameMale.' '.$faker->lastName,0,20);
    return [
        'nombre' => $nombre,
        'imagen' => str_replace(' ', '', $nombre.'.png'), //quita los espacios en blanco
        'pais_id' => luj\Models\Pais::where('nombre', 'Rep. Checa')->first()->id,
        'deporte_id' => $faker->numberBetween(1, 3),
        'competible_id' => $faker->numberBetween(1, 3),
        'competible_type' => 'luj\Models\Individual',
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
        'competible_id' => $faker->numberBetween(1, 3),
        'competible_type' => 'luj\Models\Individual',
    ];
});
$factory->defineAs(luj\Models\Competidor::class, 'SuizaH', function (Faker\Generator $faker) {
    $locale = rand(1, 3);
    switch ($locale) {
        case 1:
            $faker = Faker\Factory::create('fr_CH');break;
        case 2:
            $faker = Faker\Factory::create('de_CH');break;
            break;
        case 3:
            $faker = Faker\Factory::create('it_CH');break;
    }
    
    $nombre = substr($faker->firstNameMale.' '.$faker->lastName,0,20);
    return [
        'nombre' => $nombre,
        'imagen' => str_replace(' ', '', $nombre.'.png'), //quita los espacios en blanco
        'pais_id' => luj\Models\Pais::where('nombre', 'Suiza')->first()->id,
        'deporte_id' => $faker->numberBetween(1, 3),
        'competible_id' => $faker->numberBetween(1, 3),
        'competible_type' => 'luj\Models\Individual',
    ];
});


//********************************** COMPETIDORES FEMENINOS **********************************

$factory->defineAs(luj\Models\Competidor::class, 'AlemaniaM', function (Faker\Generator $faker) {
    $faker = Faker\Factory::create('de_DE');
    $nombre = substr($faker->firstNameFemale.' '.$faker->lastName,0,20);
    return [
        'nombre' => $nombre,
        'imagen' => str_replace(' ', '', $nombre.'.png'), //quita los espacios en blanco
        'pais_id' => luj\Models\Pais::where('nombre', 'Alemania')->first()->id,
        'deporte_id' => $faker->numberBetween(1, 3),
        'competible_id' => $faker->numberBetween(1, 3),
        'competible_type' => 'luj\Models\Individual',
    ];
});
$factory->defineAs(luj\Models\Competidor::class, 'CanadaM', function (Faker\Generator $faker) {
    $locale = rand(1, 2);
    if ($locale == 1)
        $faker = Faker\Factory::create('fr_CA');
    else $faker = Faker\Factory::create('en_CA');
    
    $nombre = substr($faker->firstNameFemale.' '.$faker->lastName,0,20);
    return [
        'nombre' => $nombre,
        'imagen' => str_replace(' ', '', $nombre.'.png'), //quita los espacios en blanco
        'pais_id' => luj\Models\Pais::where('nombre', 'Canada')->first()->id,
        'deporte_id' => $faker->numberBetween(1, 3),
        'competible_id' => $faker->numberBetween(1, 3),
        'competible_type' => 'luj\Models\Individual',
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
        'competible_id' => $faker->numberBetween(1, 3),
        'competible_type' => 'luj\Models\Individual',
    ];
});

$factory->defineAs(luj\Models\Competidor::class, 'EspañaM', function (Faker\Generator $faker) {
    //$faker->addProvider(new Faker\Provider\es_ES\Person($faker));
    $faker = Faker\Factory::create('es_ES');
    $nombre = substr($faker->firstNameFemale.' '.$faker->lastName,0,20);
    return [
        'nombre' => $nombre,
        'imagen' => str_replace(' ', '', $nombre.'.png'), //quita los espacios en blanco
        //'pais_id' => luj\Models\Pais::all()->random()->id,
        'pais_id' => luj\Models\Pais::where('nombre', 'España')->first()->id,
        'deporte_id' => $faker->numberBetween(1, 3),
        'competible_id' => $faker->numberBetween(1, 3),
        'competible_type' => 'luj\Models\Individual',
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
        'competible_id' => $faker->numberBetween(1, 3),
        'competible_type' => 'luj\Models\Individual',
    ];
});
$factory->defineAs(luj\Models\Competidor::class, 'HolandaM', function (Faker\Generator $faker) {
    $faker = Faker\Factory::create('nl_NL');
    $nombre = substr($faker->firstNameFemale.' '.$faker->lastName,0,20);
    return [
        'nombre' => $nombre,
        'imagen' => str_replace(' ', '', $nombre.'.png'), //quita los espacios en blanco
        'pais_id' => luj\Models\Pais::where('nombre', 'Holanda')->first()->id,
        'deporte_id' => $faker->numberBetween(1, 3),
        'competible_id' => $faker->numberBetween(1, 3),
        'competible_type' => 'luj\Models\Individual',
    ];
});
$factory->defineAs(luj\Models\Competidor::class, 'IndiaM', function (Faker\Generator $faker) {
    $locale = rand(1, 2);
    if ($locale == 1)
        $faker = Faker\Factory::create('bn_BN');
    else $faker = Faker\Factory::create('en_IN');
    $nombre = substr($faker->firstNameFemale.' '.$faker->lastName,0,20);
    return [
        'nombre' => $nombre,
        'imagen' => str_replace(' ', '', $nombre.'.png'), //quita los espacios en blanco
        'pais_id' => luj\Models\Pais::where('nombre', 'India')->first()->id,
        'deporte_id' => $faker->numberBetween(1, 3),
        'competible_id' => $faker->numberBetween(1, 3),
        'competible_type' => 'luj\Models\Individual',
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
        'competible_id' => $faker->numberBetween(1, 3),
        'competible_type' => 'luj\Models\Individual',
    ];
});
$factory->defineAs(luj\Models\Competidor::class, 'MexicoM', function (Faker\Generator $faker) {
    $faker = Faker\Factory::create('es_MX');
    $nombre = substr($faker->firstNameFemale.' '.$faker->lastName,0,20);
    return [
        'nombre' => $nombre,
        'imagen' => str_replace(' ', '', $nombre.'.png'), //quita los espacios en blanco
        'pais_id' => luj\Models\Pais::where('nombre', 'Mexico')->first()->id,
        'deporte_id' => $faker->numberBetween(1, 3),
        'competible_id' => $faker->numberBetween(1, 3),
        'competible_type' => 'luj\Models\Individual',
    ];
});
$factory->defineAs(luj\Models\Competidor::class, 'NoruegaM', function (Faker\Generator $faker) {
    $faker = Faker\Factory::create('no_NO');
    $nombre = substr($faker->firstNameFemale.' '.$faker->lastName,0,20);
    return [
        'nombre' => $nombre,
        'imagen' => str_replace(' ', '', $nombre.'.png'), //quita los espacios en blanco
        'pais_id' => luj\Models\Pais::where('nombre', 'Noruega')->first()->id,
        'deporte_id' => $faker->numberBetween(1, 3),
        'competible_id' => $faker->numberBetween(1, 3),
        'competible_type' => 'luj\Models\Individual',
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
        'competible_id' => $faker->numberBetween(1, 3),
        'competible_type' => 'luj\Models\Individual',
    ];
});
$factory->defineAs(luj\Models\Competidor::class, 'RepChecaM', function (Faker\Generator $faker) {
    $faker = Faker\Factory::create('cz_CZ');
    $nombre = substr($faker->firstNameFemale.' '.$faker->lastName,0,20);
    return [
        'nombre' => $nombre,
        'imagen' => str_replace(' ', '', $nombre.'.png'), //quita los espacios en blanco
        'pais_id' => luj\Models\Pais::where('nombre', 'Rep. Checa')->first()->id,
        'deporte_id' => $faker->numberBetween(1, 3),
        'competible_id' => $faker->numberBetween(1, 3),
        'competible_type' => 'luj\Models\Individual',
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
        'competible_id' => $faker->numberBetween(1, 3),
        'competible_type' => 'luj\Models\Individual',
    ];
});
$factory->defineAs(luj\Models\Competidor::class, 'SuizaM', function (Faker\Generator $faker) {
    $locale = rand(1, 3);
    switch ($locale) {
        case 1:
            $faker = Faker\Factory::create('fr_CH');break;
        case 2:
            $faker = Faker\Factory::create('de_CH');break;
            break;
        case 3:
            $faker = Faker\Factory::create('it_CH');break;
    }
    
    $nombre = substr($faker->firstNameFemale.' '.$faker->lastName,0,20);
    return [
        'nombre' => $nombre,
        'imagen' => str_replace(' ', '', $nombre.'.png'), //quita los espacios en blanco
        'pais_id' => luj\Models\Pais::where('nombre', 'Suiza')->first()->id,
        'deporte_id' => $faker->numberBetween(1, 3),
        'competible_id' => $faker->numberBetween(1, 3),
        'competible_type' => 'luj\Models\Individual',
    ];
});
