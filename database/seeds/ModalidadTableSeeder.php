<?php

use Illuminate\Database\Seeder;

class ModalidadTableSeeder extends Seeder
{
    public function run()
    {
        DB::table('modalidades')->truncate();
		$fecha = date("Y-m-d H:i:s");
		$modalidades = [
			[//1
				'nombre' => 'Liga Regular',
				'num_mod' => 1,
				'num_jornadas' => 38,
				'num_participantes' => 20,
				'num_grupos' => 1,
				'parti_x_equipo' => 0,
				'competicion_id' => luj\Models\Competicion::where('nombre', 'BBVA')->first()->id,
				'created_at' => $fecha,
				'updated_at' => $fecha
			],
			[
				'nombre' => 'Liga Regular',
				'num_mod' => 1,
				'num_jornadas' => 38,
				'num_participantes' => 20,
				'num_grupos' => 1,
				'parti_x_equipo' => 0,
				'competicion_id' => luj\Models\Competicion::where('nombre', 'Santander')->first()->id,
				'created_at' => $fecha,
				'updated_at' => $fecha
			],
			[
				'nombre' => 'Liga Regular',
				'num_mod' => 1,
				'num_jornadas' => 34,
				'num_participantes' => 18,
				'num_grupos' => 1,
				'parti_x_equipo' => 0,
				'competicion_id' => luj\Models\Competicion::where('nombre', 'Bundesliga')->first()->id,
				'created_at' => $fecha,
				'updated_at' => $fecha
			],
			[
				'nombre' => 'Liga Regular',
				'num_mod' => 1,
				'num_jornadas' => 38,
				'num_participantes' => 20,
				'num_grupos' => 1,
				'parti_x_equipo' => 0,
				'competicion_id' => luj\Models\Competicion::where('nombre', 'Premier League')->first()->id,
				'created_at' => $fecha,
				'updated_at' => $fecha
			],
			[//5 Champions League
				'nombre' => 'Fase de Grupos',
				'num_mod' => 1,
				'num_jornadas' => 6,
				'num_participantes' => 32,
				'num_grupos' => 8,
				'parti_x_equipo' => 0,
				'competicion_id' => luj\Models\Competicion::where('nombre', 'Champions League')->first()->id,
				'created_at' => $fecha,
				'updated_at' => $fecha
			],
			[
				'nombre' => 'Fase Final',
				'num_mod' => 2,
				'num_jornadas' => 4,
				'num_participantes' => 16,
				'num_grupos' => 4,
				'parti_x_equipo' => 0,
				'competicion_id' => luj\Models\Competicion::where('nombre', 'Champions League')->first()->id,
				'created_at' => $fecha,
				'updated_at' => $fecha
			],
			[// UEFA EURO 2016
				'nombre' => 'Fase de Grupos',
				'num_mod' => 1,
				'num_jornadas' => 3,
				'num_participantes' => 24,
				'num_grupos' => 6,
				'parti_x_equipo' => 0,
				'competicion_id' => luj\Models\Competicion::where('nombre', 'UEFA EURO 2016')->first()->id,
				'created_at' => $fecha,
				'updated_at' => $fecha
			],
			[
				'nombre' => 'Fase Final',
				'num_mod' => 2,
				'num_jornadas' => 4,
				'num_participantes' => 16,
				'num_grupos' => 4,
				'parti_x_equipo' => 0,
				'competicion_id' => luj\Models\Competicion::where('nombre', 'UEFA EURO 2016')->first()->id,
				'created_at' => $fecha,
				'updated_at' => $fecha
			],
			[// Liga Endesa
				'nombre' => 'Fase Regular',
				'num_mod' => 1,
				'num_jornadas' => 34,
				'num_participantes' => 18,
				'num_grupos' => 1,
				'parti_x_equipo' => 0,
				'competicion_id' => luj\Models\Competicion::where('nombre', 'Liga Endesa')->first()->id,
				'created_at' => $fecha,
				'updated_at' => $fecha
			],
			[
				'nombre' => 'Play Off',
				'num_mod' => 2,
				'num_jornadas' => 3,
				'num_participantes' => 8,
				'num_grupos' => 3,
				'parti_x_equipo' => 0,
				'competicion_id' => luj\Models\Competicion::where('nombre', 'Liga Endesa')->first()->id,
				'created_at' => $fecha,
				'updated_at' => $fecha
			],
        	[// EuroBasket
				'nombre' => 'Liguilla',
				'num_mod' => 1,
				'num_jornadas' => 5,
				'num_participantes' => 24,
				'num_grupos' => 4,
				'parti_x_equipo' => 0,
				'competicion_id' => luj\Models\Competicion::where('nombre', 'EuroBasket')->first()->id,
				'created_at' => $fecha,
				'updated_at' => $fecha
			],
			[
				'nombre' => 'Play Off',
				'num_mod' => 2,
				'num_jornadas' => 4,//tercer y cuarto en la joranda de la Final
				'num_participantes' => 16,
				'num_grupos' => 5,
				'parti_x_equipo' => 0,
				'competicion_id' => luj\Models\Competicion::where('nombre', 'EuroBasket')->first()->id,
				'created_at' => $fecha,
				'updated_at' => $fecha
			],
			[//Roland Garros
				'nombre' => 'Individual Masculino',
				'num_mod' => 1,
				'num_jornadas' => 3,
				'num_participantes' => 8,
				'num_grupos' => 3,
				'parti_x_equipo' => 0,
				'competicion_id' => luj\Models\Competicion::where('nombre', 'Roland Garros')->first()->id,
				'created_at' => $fecha,
				'updated_at' => $fecha
			],
			[
				'nombre' => 'Individual Femenino',
				'num_mod' => 2,
				'num_jornadas' => 3,
				'num_participantes' => 8,
				'num_grupos' => 3,
				'parti_x_equipo' => 0,
				'competicion_id' => luj\Models\Competicion::where('nombre', 'Roland Garros')->first()->id,
				'created_at' => $fecha,
				'updated_at' => $fecha
			],
			[
				'nombre' => 'Dobles Masculino',
				'num_mod' => 3,
				'num_jornadas' => 2,
				'num_participantes' => 4,
				'num_grupos' => 2,
				'parti_x_equipo' => 2,
				'competicion_id' => luj\Models\Competicion::where('nombre', 'Roland Garros')->first()->id,
				'created_at' => $fecha,
				'updated_at' => $fecha
			],
			[
				'nombre' => 'Dobles Femenino',
				'num_mod' => 4,
				'num_jornadas' => 2,
				'num_participantes' => 4,
				'num_grupos' => 2,
				'parti_x_equipo' => 2,
				'competicion_id' => luj\Models\Competicion::where('nombre', 'Roland Garros')->first()->id,
				'created_at' => $fecha,
				'updated_at' => $fecha
			],
			[
				'nombre' => 'Dobles Mixto',
				'num_mod' => 5,
				'num_jornadas' => 2,
				'num_participantes' => 4,
				'num_grupos' => 2,
				'parti_x_equipo' => 2,
				'competicion_id' => luj\Models\Competicion::where('nombre', 'Roland Garros')->first()->id,
				'created_at' => $fecha,
				'updated_at' => $fecha
			],
			[//Copa Davis
				'nombre' => 'Grupo Mundial',
				'num_mod' => 1,
				'num_jornadas' => 4,
				'num_participantes' => 16,
				'num_grupos' => 4,
				'parti_x_equipo' => 5,
				'competicion_id' => luj\Models\Competicion::where('nombre', 'Copa Davis')->first()->id,
				'created_at' => $fecha,
				'updated_at' => $fecha
			],
		];
		DB::table('modalidades')->insert($modalidades);
    }
}
