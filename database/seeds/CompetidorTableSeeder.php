<?php
use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;
Class CompetidorTableSeeder extends Seeder {

	public function run() {

		DB::table('competidores')->truncate();
		$fecha = date("Y-m-d H:i:s");

	/*	factory(luj\Models\Competidor::class)->create([
			'nombre' => 'Ath. Bilbao', 'imagen' => 'AthleticBilbao.png', 'pais_id' => $pais->id, 'deporte_id' => 1]);
	*/
		$pais = luj\Models\Pais::where('nombre', 'España')->first();
		$pais->id;
		//Futbol
		$comp = [		
			//Primera Division

		//1		
			['nombre' => 'Ath. Bilbao', 'imagen' => 'AthleticBilbao.png', 'pais_id' => $pais->id, 'deporte_id' => 1, 'created_at' => $fecha, 'updated_at' => $fecha],
			['nombre' => 'Atl. Madrid', 'imagen' => 'AtleticoMadrid.png', 'pais_id' => $pais->id, 'deporte_id' => 1, 'created_at' => $fecha, 'updated_at' => $fecha],
			['nombre' => 'Barcelona', 'imagen' => 'Barcelona.png', 'pais_id' => $pais->id, 'deporte_id' => 1, 'created_at' => $fecha, 'updated_at' => $fecha],
			['nombre' => 'Celta', 'imagen' => 'Celta.png', 'pais_id' => $pais->id, 'deporte_id' => 1, 'created_at' => $fecha, 'updated_at' => $fecha],
			['nombre' => 'Deportivo', 'imagen' => 'Deportivo.png', 'pais_id' => $pais->id, 'deporte_id' => 1, 'created_at' => $fecha, 'updated_at' => $fecha],
		//6	
			['nombre' => 'Eibar','imagen' => 'Eibar.png', 'pais_id' => $pais->id, 'deporte_id' => 1, 'created_at' => $fecha, 'updated_at' => $fecha],
			['nombre' => 'Espanyol', 'imagen' => 'Espanyol.png', 'pais_id' => $pais->id, 'deporte_id' => 1, 'created_at' => $fecha, 'updated_at' => $fecha],
			['nombre' => 'Getafe', 'imagen' => 'Getafe.png', 'pais_id' => $pais->id, 'deporte_id' => 1, 'created_at' => $fecha, 'updated_at' => $fecha],
			['nombre' => 'Granada', 'imagen' => 'Granada.png', 'pais_id' => $pais->id, 'deporte_id' => 1, 'created_at' => $fecha, 'updated_at' => $fecha],
			['nombre' => 'Levante', 'imagen' => 'Levante.png', 'pais_id' => $pais->id, 'deporte_id' => 1, 'created_at' => $fecha, 'updated_at' => $fecha],
		//11
			['nombre' => 'Málaga', 'imagen' => 'Malaga.png', 'pais_id' => $pais->id, 'deporte_id' => 1, 'created_at' => $fecha, 'updated_at' => $fecha],
			['nombre' => 'Rayo Vallecano', 'imagen' => 'RayoVallecano.png', 'pais_id' => $pais->id, 'deporte_id' => 1, 'created_at' => $fecha, 'updated_at' => $fecha],
			['nombre' => 'Real Madrid', 'imagen' => 'RealMadrid.png', 'pais_id' => $pais->id, 'deporte_id' => 1, 'created_at' => $fecha, 'updated_at' => $fecha],
			['nombre' => 'Real Sociedad', 'imagen' => 'RealSociedad.png', 'pais_id' => $pais->id, 'deporte_id' => 1, 'created_at' => $fecha, 'updated_at' => $fecha],
			['nombre' => 'Sevilla', 'imagen' => 'Sevilla.png', 'pais_id' => $pais->id, 'deporte_id' => 1, 'created_at' => $fecha, 'updated_at' => $fecha],
	//16	
			['nombre' => 'Valencia','imagen' => 'Valencia.png', 'pais_id' => $pais->id, 'deporte_id' => 1, 'created_at' => $fecha, 'updated_at' => $fecha],
			['nombre' => 'Villarreal', 'imagen' => 'Villarreal.png', 'pais_id' => $pais->id, 'deporte_id' => 1, 'created_at' => $fecha, 'updated_at' => $fecha],

			//Descensos
		//18
			['nombre' => 'Almeria', 'imagen' => 'Almeria.png', 'pais_id' => $pais->id, 'deporte_id' => 1, 'created_at' => $fecha, 'updated_at' => $fecha],
			['nombre' => 'Córdoba', 'imagen' => 'Cordoba.png', 'pais_id' => $pais->id, 'deporte_id' => 1, 'created_at' => $fecha, 'updated_at' => $fecha],
			['nombre' => 'Elche', 'imagen' => 'Elche.png', 'pais_id' => $pais->id, 'deporte_id' => 1, 'created_at' => $fecha, 'updated_at' => $fecha],
			//Ascendidos	
		//21
			['nombre' => 'Las Palmas', 'imagen' => 'LasPalmas.png', 'pais_id' => $pais->id, 'deporte_id' => 1, 'created_at' => $fecha, 'updated_at' => $fecha],
			['nombre' => 'Sporting', 'imagen' => 'Sporting.png', 'pais_id' => $pais->id, 'deporte_id' => 1, 'created_at' => $fecha, 'updated_at' => $fecha],
			['nombre' => 'Betis', 'imagen' => 'Betis.png', 'pais_id' => $pais->id, 'deporte_id' => 1, 'created_at' => $fecha, 'updated_at' => $fecha],
			//Segunda Division
			//24
			['nombre' => 'Alavés', 'imagen' => 'Alaves.png', 'pais_id' => $pais->id, 'deporte_id' => 1, 'created_at' => $fecha, 'updated_at' => $fecha],
			['nombre' => 'Albacete', 'imagen' => 'Albacete.png', 'pais_id' => $pais->id, 'deporte_id' => 1, 'created_at' => $fecha, 'updated_at' => $fecha],
			['nombre' => 'Alcoyano', 'imagen' => 'Alcoyano.png', 'pais_id' => $pais->id, 'deporte_id' => 1, 'created_at' => $fecha, 'updated_at' => $fecha],
			['nombre' => 'Sabadell', 'imagen' => 'Sabadell.png', 'pais_id' => $pais->id, 'deporte_id' => 1, 'created_at' => $fecha, 'updated_at' => $fecha]
			];
			DB::table('competidores')->insert($comp);

		//Baloncesto
		$comp = [
		//28 Liga ACB
			['nombre' => 'Sevilla', 'imagen' => 'Sevilla.png', 'pais_id' => $pais->id, 'deporte_id' => 2, 'created_at' => $fecha, 'updated_at' => $fecha],
			['nombre' => 'Zaragoza', 'imagen' => 'Zaragoza.png', 'pais_id' => $pais->id, 'deporte_id' => 2, 'created_at' => $fecha, 'updated_at' => $fecha],
			['nombre' => 'Bilbao Basket', 'imagen' => 'Bilbao.png', 'pais_id' => $pais->id, 'deporte_id' => 2, 'created_at' => $fecha, 'updated_at' => $fecha],
			['nombre' => 'Barcelona', 'imagen' => 'Barcelona.png', 'pais_id' => $pais->id, 'deporte_id' => 2, 'created_at' => $fecha, 'updated_at' => $fecha],
			['nombre' => 'Joventut', 'imagen' => 'Joventut.png', 'pais_id' => $pais->id, 'deporte_id' => 2, 'created_at' => $fecha, 'updated_at' => $fecha],
		//33
			['nombre' => 'Guipuzkoa Basket', 'imagen' => 'Guipuzkoa.png','pais_id' => $pais->id, 'deporte_id' => 2, 'created_at' => $fecha, 'updated_at' => $fecha],
			['nombre' => 'Gran Canaria', 'imagen' => 'GranCanaria.png', 'pais_id' => $pais->id, 'deporte_id' => 2, 'created_at' => $fecha, 'updated_at' => $fecha],
			['nombre' => 'Tenerife', 'imagen' => 'Tenerife.png', 'pais_id' => $pais->id, 'deporte_id' => 2, 'created_at' => $fecha, 'updated_at' => $fecha],
			['nombre' => 'Baskonia', 'imagen' => 'Baskonia.png', 'pais_id' => $pais->id, 'deporte_id' => 2, 'created_at' => $fecha, 'updated_at' => $fecha],
			['nombre' => 'Manresa', 'imagen' => 'Manresa.png', 'pais_id' => $pais->id, 'deporte_id' => 2, 'created_at' => $fecha, 'updated_at' => $fecha],
		//38
			['nombre' => 'Fuenlabrada', 'imagen' => 'Fuenlabrada.png', 'pais_id' => $pais->id, 'deporte_id' => 2, 'created_at' => $fecha, 'updated_at' => $fecha],
			['nombre' => 'Andorra', 'imagen' => 'Andorra.png', 'pais_id' => $pais->id, 'deporte_id' => 2, 'created_at' => $fecha, 'updated_at' => $fecha],
			['nombre' => 'Estudiantes', 'imagen' => 'Estudiantes.png', 'pais_id' => $pais->id, 'deporte_id' => 2, 'created_at' => $fecha, 'updated_at' => $fecha],
			['nombre' => 'Real Madrid', 'imagen' => 'RealMadrid.png', 'pais_id' => $pais->id, 'deporte_id' => 2, 'created_at' => $fecha, 'updated_at' => $fecha],
			['nombre' => 'Obradoiro', 'imagen' => 'Obradoiro.png', 'pais_id' => $pais->id, 'deporte_id' => 2, 'created_at' => $fecha, 'updated_at' => $fecha],
		//43
			['nombre' => 'Murcia', 'imagen' => 'Murcia.png', 'pais_id' => $pais->id, 'deporte_id' => 2, 'created_at' => $fecha, 'updated_at' => $fecha],
			['nombre' => 'Unicaja', 'imagen' => 'Unicaja.png', 'pais_id' => $pais->id, 'deporte_id' => 2, 'created_at' => $fecha, 'updated_at' => $fecha],
			['nombre' => 'Valencia Basket', 'imagen' => 'Valencia.png', 'pais_id' => $pais->id, 'deporte_id' => 2, 'created_at' => $fecha, 'updated_at' => $fecha],
		];
		$pais = luj\Models\Pais::where('nombre', 'Inglaterra')->first();
		$pais->id;
		DB::table('competidores')->insert($comp);
		$comp = [
		//46 Equipos Ingleses
			['nombre' => 'Manchester United', 'imagen' => 'ManUnited.png', 'pais_id' => $pais->id, 'deporte_id' => 1, 'created_at' => $fecha, 'updated_at' => $fecha],
			['nombre' => 'Tottenham Hotspur', 'imagen' => 'Tottenham.png', 'pais_id' => $pais->id, 'deporte_id' => 1, 'created_at' => $fecha, 'updated_at' => $fecha],
			['nombre' => 'Leicester', 'imagen' => 'Leicester.png', 'pais_id' => $pais->id, 'deporte_id' => 1, 'created_at' => $fecha, 'updated_at' => $fecha],
			['nombre' => 'Sunderland', 'imagen' => 'Sunderland.png', 'pais_id' => $pais->id, 'deporte_id' => 1, 'created_at' => $fecha, 'updated_at' => $fecha],
			['nombre' => 'Norwich City', 'imagen' => 'Norwich.png', 'pais_id' => $pais->id, 'deporte_id' => 1, 'created_at' => $fecha, 'updated_at' => $fecha],
		//51
			['nombre' => 'Crystal Palace','imagen' => 'Everton.png', 'pais_id' => $pais->id, 'deporte_id' => 1, 'created_at' => $fecha, 'updated_at' => $fecha],
			['nombre' => 'Everton','imagen' => 'Everton.png', 'pais_id' => $pais->id, 'deporte_id' => 1, 'created_at' => $fecha, 'updated_at' => $fecha],
			['nombre' => 'Watford', 'imagen' => 'Watford.png', 'pais_id' => $pais->id, 'deporte_id' => 1, 'created_at' => $fecha, 'updated_at' => $fecha],
			['nombre' => 'AFC Bournemouth', 'imagen' => 'Bournemouth.png', 'pais_id' => $pais->id, 'deporte_id' => 1, 'created_at' => $fecha, 'updated_at' => $fecha],
			['nombre' => 'Aston Villa', 'imagen' => 'AstonVilla.png', 'pais_id' => $pais->id, 'deporte_id' => 1, 'created_at' => $fecha, 'updated_at' => $fecha],
		//56
			['nombre' => 'Chelsea', 'imagen' => 'Chelsea.png', 'pais_id' => $pais->id, 'deporte_id' => 1, 'created_at' => $fecha, 'updated_at' => $fecha],
			['nombre' => 'Swansea City', 'imagen' => 'SwanseaCity.png', 'pais_id' => $pais->id, 'deporte_id' => 1, 'created_at' => $fecha, 'updated_at' => $fecha],
			['nombre' => 'Newcastle', 'imagen' => 'Newcastle.png', 'pais_id' => $pais->id, 'deporte_id' => 1, 'created_at' => $fecha, 'updated_at' => $fecha],
			['nombre' => 'Southampton', 'imagen' => 'Southampton.png', 'pais_id' => $pais->id, 'deporte_id' => 1, 'created_at' => $fecha, 'updated_at' => $fecha],
			['nombre' => 'Arsenal', 'imagen' => 'Arsenal.png', 'pais_id' => $pais->id, 'deporte_id' => 1, 'created_at' => $fecha, 'updated_at' => $fecha],
		//61
			['nombre' => 'Stoke City', 'imagen' => 'StokeCity.png', 'pais_id' => $pais->id, 'deporte_id' => 1, 'created_at' => $fecha, 'updated_at' => $fecha],
			['nombre' => 'West Ham', 'imagen' => 'WestHam.png', 'pais_id' => $pais->id, 'deporte_id' => 1, 'created_at' => $fecha, 'updated_at' => $fecha],
			['nombre' => 'Liverpool', 'imagen' => 'Liverpool.png', 'pais_id' => $pais->id, 'deporte_id' => 1, 'created_at' => $fecha, 'updated_at' => $fecha],
			['nombre' => 'West Bromwich Albion', 'imagen' => 'BromwichAlbion.png', 'pais_id' => $pais->id, 'deporte_id' => 1, 'created_at' => $fecha, 'updated_at' => $fecha],
			['nombre' => 'Manchester City', 'imagen' => 'ManCity.png', 'pais_id' => $pais->id, 'deporte_id' => 1, 'created_at' => $fecha, 'updated_at' => $fecha],
		];
		DB::table('competidores')->insert($comp);

		$pais = luj\Models\Pais::where('nombre', 'Alemania')->first();
		$pais->id;
		$comp = [
		//66 Bundesliga y otros
			['nombre' => 'Bayern Leverkusen','imagen' => 'BLeverkusen.png', 'pais_id' => $pais->id, 'deporte_id' => 1, 'created_at' => $fecha, 'updated_at' => $fecha],
			['nombre' => 'Bayern München', 'imagen' => 'BMunchen.png', 'pais_id' => $pais->id, 'deporte_id' => 1, 'created_at' => $fecha, 'updated_at' => $fecha],
			['nombre' => 'Schalke04', 'imagen' => 'Schalke.png', 'pais_id' => $pais->id, 'deporte_id' => 1, 'created_at' => $fecha, 'updated_at' => $fecha],
			['nombre' => 'Werder Bremen', 'imagen' => 'WBremen.png', 'pais_id' => $pais->id, 'deporte_id' => 1, 'created_at' => $fecha, 'updated_at' => $fecha],
		];
		$pais = luj\Models\Pais::where('nombre', 'Francia')->first();
		$pais->id;
			//Equipos Franceses
		array_push($comp, ['nombre' => 'París St. Germain','imagen' => 'ParisSG.png', 'pais_id' => $pais->id, 'deporte_id' => 1, 'created_at' => $fecha, 'updated_at' => $fecha]);	
		
		DB::table('competidores')->insert($comp);
		
	}
}