<?php

use Illuminate\Database\Seeder;
use Faker\Factory as Faker;

class IndividualTableSeeder extends Seeder
{
    public function run()
    {
        DB::table('individuales')->truncate();
        $fecha = date("Y-m-d H:i:s");
        //factory(luj\Models\Competidor::class, 49)->create();
        //https://github.com/fzaninotto/Faker/tree/master/src/Faker/Provider
        $paises = ['España', 'EEUU', 'Francia', 'Italia', 'Portugal', 'Rumania'];
        $problemas = ['Suecia'];
         //Los suecos pueden dar problemas por algunos caracteres (utf8mb)

        //TENISTAS MASCULINOS
        foreach ($paises as $p) {
                factory(luj\Models\Competidor::class, $p.'H', 5)->create([
            'deporte_id' => 3])->each(function ($u) {
                $u->equipo()->save(factory(luj\Models\Individual::class)->create([
                    'masculino' => true
                    ]));
            });
        }

        //TENISTAS FEMENINAS
        foreach ($paises as $p) {
                factory(luj\Models\Competidor::class, $p.'M', 5)->create([
            'deporte_id' => 3])->each(function ($u) {
                $u->equipo()->save(factory(luj\Models\Individual::class)->create([
                    'masculino' => false
                    ]));
            });
        }
    }
}
