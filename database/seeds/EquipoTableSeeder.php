<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;
class EquipoTableSeeder extends Seeder
{

    public function run()
    {

        DB::table('equipos')->truncate();
        $fecha = date("Y-m-d H:i:s");
        //strtoupper(substr('string',0,3)) obtiene los 3 primeros caracteres de un string y los pasa a mayuscula
/*
		factory(luj\Models\Competidor::class)->create([
			'nombre' => 'Ath. Bilbao', 'imagen' => 'AthleticBilbao.png', 'pais_id' => 1, 'deporte_id' => 1])->each(function ($u) {
                $u->equipo()->save(factory(luj\Models\Equipo::class)->create([
                	'acronimo' => 'ATB'
                	]));
            });

        $comp=factory(luj\Models\Competidor::class)->create([
			'nombre' => 'Atl. Madrid', 'imagen' => 'AtleticoMadrid.png', 'pais_id' => 1, 'deporte_id' => 1]);
        factory(luj\Models\Equipo::class)->create([
        	'competidor_id' => $comp->id,
			'acronimo' => 'ATM']); 
		*/
		//Futbol
		$equipos = [		
		//Primera Division	
		//1		
			['acronimo' => 'ATB', 'competidor_id' => 1, 'seleccion' => 0, 'created_at' => $fecha, 'updated_at' => $fecha],
			['acronimo' => 'ATM', 'competidor_id' => 2,'seleccion' => 0, 'created_at' => $fecha, 'updated_at' => $fecha],
			['acronimo' => 'FCB', 'competidor_id' => 3,'seleccion' => 0, 'created_at' => $fecha, 'updated_at' => $fecha],
			['acronimo' => 'CEL', 'competidor_id' => 4,'seleccion' => 0, 'created_at' => $fecha, 'updated_at' => $fecha],
			['acronimo' => 'DEP', 'competidor_id' => 5,'seleccion' => 0, 'created_at' => $fecha, 'updated_at' => $fecha],
		//6		
			['acronimo' => 'EIB', 'competidor_id' => 6, 'seleccion' => 0, 'created_at' => $fecha, 'updated_at' => $fecha],
			['acronimo' => 'ESP', 'competidor_id' => 7,'seleccion' => 0, 'created_at' => $fecha, 'updated_at' => $fecha],
			['acronimo' => 'GET', 'competidor_id' => 8,'seleccion' => 0, 'created_at' => $fecha, 'updated_at' => $fecha],
			['acronimo' => 'GRA', 'competidor_id' => 9,'seleccion' => 0, 'created_at' => $fecha, 'updated_at' => $fecha],
			['acronimo' => 'LEV', 'competidor_id' => 10,'seleccion' => 0, 'created_at' => $fecha, 'updated_at' => $fecha],
		//11		
			['acronimo' => 'MAL', 'competidor_id' => 11, 'seleccion' => 0, 'created_at' => $fecha, 'updated_at' => $fecha],
			['acronimo' => 'RVA', 'competidor_id' => 12,'seleccion' => 0, 'created_at' => $fecha, 'updated_at' => $fecha],
			['acronimo' => 'RMD', 'competidor_id' => 13,'seleccion' => 0, 'created_at' => $fecha, 'updated_at' => $fecha],
			['acronimo' => 'RSO', 'competidor_id' => 14,'seleccion' => 0, 'created_at' => $fecha, 'updated_at' => $fecha],
			['acronimo' => 'SEV', 'competidor_id' => 15,'seleccion' => 0, 'created_at' => $fecha, 'updated_at' => $fecha],
		//16		
			['acronimo' => 'VFC', 'competidor_id' => 16, 'seleccion' => 0, 'created_at' => $fecha, 'updated_at' => $fecha],
			['acronimo' => 'VIL', 'competidor_id' => 17,'seleccion' => 0, 'created_at' => $fecha, 'updated_at' => $fecha],
			['acronimo' => 'ALM', 'competidor_id' => 18,'seleccion' => 0, 'created_at' => $fecha, 'updated_at' => $fecha],
			['acronimo' => 'COR', 'competidor_id' => 19,'seleccion' => 0, 'created_at' => $fecha, 'updated_at' => $fecha],
			['acronimo' => 'ELC', 'competidor_id' => 20,'seleccion' => 0, 'created_at' => $fecha, 'updated_at' => $fecha],
		//21		
			['acronimo' => 'PAL', 'competidor_id' => 21, 'seleccion' => 0, 'created_at' => $fecha, 'updated_at' => $fecha],
			['acronimo' => 'SPO', 'competidor_id' => 22,'seleccion' => 0, 'created_at' => $fecha, 'updated_at' => $fecha],
			['acronimo' => 'BET', 'competidor_id' => 23,'seleccion' => 0, 'created_at' => $fecha, 'updated_at' => $fecha],		
		//24 Segunda Division
			['acronimo' => 'ALV', 'competidor_id' => 24, 'seleccion' => 0, 'created_at' => $fecha, 'updated_at' => $fecha],
			['acronimo' => 'ALB', 'competidor_id' => 25,'seleccion' => 0, 'created_at' => $fecha, 'updated_at' => $fecha],
			['acronimo' => 'ALC', 'competidor_id' => 26,'seleccion' => 0, 'created_at' => $fecha, 'updated_at' => $fecha],
			['acronimo' => 'SAB', 'competidor_id' => 27,'seleccion' => 0, 'created_at' => $fecha, 'updated_at' => $fecha]
		];
		DB::table('equipos')->insert($equipos);

		$equipos = [		
		//Liga ACB	
		//28		
			['acronimo' => 'SEV', 'competidor_id' => 28, 'seleccion' => 0, 'created_at' => $fecha, 'updated_at' => $fecha],
			['acronimo' => 'ZAR', 'competidor_id' => 29,'seleccion' => 0, 'created_at' => $fecha, 'updated_at' => $fecha],
			['acronimo' => 'BIL', 'competidor_id' => 30,'seleccion' => 0, 'created_at' => $fecha, 'updated_at' => $fecha],
			['acronimo' => 'BCN', 'competidor_id' => 31,'seleccion' => 0, 'created_at' => $fecha, 'updated_at' => $fecha],
			['acronimo' => 'JOV', 'competidor_id' => 32,'seleccion' => 0, 'created_at' => $fecha, 'updated_at' => $fecha],
		//33		
			['acronimo' => 'GIP', 'competidor_id' => 33, 'seleccion' => 0, 'created_at' => $fecha, 'updated_at' => $fecha],
			['acronimo' => 'GCA', 'competidor_id' => 34,'seleccion' => 0, 'created_at' => $fecha, 'updated_at' => $fecha],
			['acronimo' => 'TEN', 'competidor_id' => 35,'seleccion' => 0, 'created_at' => $fecha, 'updated_at' => $fecha],
			['acronimo' => 'BSK', 'competidor_id' => 36,'seleccion' => 0, 'created_at' => $fecha, 'updated_at' => $fecha],
			['acronimo' => 'MAN', 'competidor_id' => 37,'seleccion' => 0, 'created_at' => $fecha, 'updated_at' => $fecha],
		//38		
			['acronimo' => 'FUE', 'competidor_id' => 38, 'seleccion' => 0, 'created_at' => $fecha, 'updated_at' => $fecha],
			['acronimo' => 'AND', 'competidor_id' => 39,'seleccion' => 0, 'created_at' => $fecha, 'updated_at' => $fecha],
			['acronimo' => 'EST', 'competidor_id' => 40,'seleccion' => 0, 'created_at' => $fecha, 'updated_at' => $fecha],
			['acronimo' => 'RMA', 'competidor_id' => 41,'seleccion' => 0, 'created_at' => $fecha, 'updated_at' => $fecha],
			['acronimo' => 'OBR', 'competidor_id' => 42,'seleccion' => 0, 'created_at' => $fecha, 'updated_at' => $fecha],
		//43		
			['acronimo' => 'MUR', 'competidor_id' => 43, 'seleccion' => 0, 'created_at' => $fecha, 'updated_at' => $fecha],
			['acronimo' => 'UNI', 'competidor_id' => 44,'seleccion' => 0, 'created_at' => $fecha, 'updated_at' => $fecha],
			['acronimo' => 'VAL', 'competidor_id' => 45,'seleccion' => 0, 'created_at' => $fecha, 'updated_at' => $fecha],
		];
		DB::table('equipos')->insert($equipos);
		$equipos = [		
		//46 Premier League	
		['acronimo' => 'MUN', 'competidor_id' => 46, 'seleccion' => 0, 'created_at' => $fecha, 'updated_at' => $fecha],
		['acronimo' => 'HOT', 'competidor_id' => 47,'seleccion' => 0, 'created_at' => $fecha, 'updated_at' => $fecha],
		['acronimo' => 'LEI', 'competidor_id' => 48,'seleccion' => 0, 'created_at' => $fecha, 'updated_at' => $fecha],
		['acronimo' => 'SUN', 'competidor_id' => 49,'seleccion' => 0, 'created_at' => $fecha, 'updated_at' => $fecha],
		['acronimo' => 'NOR', 'competidor_id' => 50,'seleccion' => 0, 'created_at' => $fecha, 'updated_at' => $fecha],
		//51	
		['acronimo' => 'CRP', 'competidor_id' => 51, 'seleccion' => 0, 'created_at' => $fecha, 'updated_at' => $fecha],
		['acronimo' => 'EVT', 'competidor_id' => 52,'seleccion' => 0, 'created_at' => $fecha, 'updated_at' => $fecha],
		['acronimo' => 'WAT', 'competidor_id' => 53,'seleccion' => 0, 'created_at' => $fecha, 'updated_at' => $fecha],
		['acronimo' => 'BOU', 'competidor_id' => 54,'seleccion' => 0, 'created_at' => $fecha, 'updated_at' => $fecha],
		['acronimo' => 'AVI', 'competidor_id' => 55,'seleccion' => 0, 'created_at' => $fecha, 'updated_at' => $fecha],
		//56	
		['acronimo' => 'CHE', 'competidor_id' => 56, 'seleccion' => 0, 'created_at' => $fecha, 'updated_at' => $fecha],
		['acronimo' => 'SWA', 'competidor_id' => 57,'seleccion' => 0, 'created_at' => $fecha, 'updated_at' => $fecha],
		['acronimo' => 'CTL', 'competidor_id' => 58,'seleccion' => 0, 'created_at' => $fecha, 'updated_at' => $fecha],
		['acronimo' => 'SOU', 'competidor_id' => 59,'seleccion' => 0, 'created_at' => $fecha, 'updated_at' => $fecha],
		['acronimo' => 'ARS', 'competidor_id' => 60,'seleccion' => 0, 'created_at' => $fecha, 'updated_at' => $fecha],
		//61	
		['acronimo' => 'STK', 'competidor_id' => 61, 'seleccion' => 0, 'created_at' => $fecha, 'updated_at' => $fecha],
		['acronimo' => 'HAM', 'competidor_id' => 62,'seleccion' => 0, 'created_at' => $fecha, 'updated_at' => $fecha],
		['acronimo' => 'LIV', 'competidor_id' => 63,'seleccion' => 0, 'created_at' => $fecha, 'updated_at' => $fecha],
		['acronimo' => 'BRO', 'competidor_id' => 64,'seleccion' => 0, 'created_at' => $fecha, 'updated_at' => $fecha],
		['acronimo' => 'CIT', 'competidor_id' => 65,'seleccion' => 0, 'created_at' => $fecha, 'updated_at' => $fecha],
		];
		DB::table('equipos')->insert($equipos);
		$equipos = [
		//66 Bundesliga y otros
		['acronimo' => 'LVK', 'competidor_id' => 66, 'seleccion' => 0, 'created_at' => $fecha, 'updated_at' => $fecha],
		['acronimo' => 'BAY', 'competidor_id' => 67,'seleccion' => 0, 'created_at' => $fecha, 'updated_at' => $fecha],
		['acronimo' => 'SCH', 'competidor_id' => 68,'seleccion' => 0, 'created_at' => $fecha, 'updated_at' => $fecha],
		['acronimo' => 'BRE', 'competidor_id' => 69,'seleccion' => 0, 'created_at' => $fecha, 'updated_at' => $fecha],
		['acronimo' => 'SGE', 'competidor_id' => 70,'seleccion' => 0, 'created_at' => $fecha, 'updated_at' => $fecha],
		];
		DB::table('equipos')->insert($equipos);

		//FUNCION
		//Crea una seleccion para cada pais y deporte que exista en la BD
		$paises = luj\Models\Pais::all();
		$deportes = luj\Models\Deporte::all();
		foreach ($paises as $p) {
			foreach ($deportes as $d) {
				$comp=factory(luj\Models\Competidor::class)->create([
					'nombre' => $p->nombre, 'imagen' => null, 'pais_id' => $p->id, 'deporte_id' => $d->id]);
        		factory(luj\Models\Equipo::class)->create([
		        	'competidor_id' => $comp->id,
					'acronimo' => $p->nombre_corto,
					'seleccion' =>  true]);
			}		
		}
		
    }
}
