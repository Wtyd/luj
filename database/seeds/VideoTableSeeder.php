<?php

Class VideoTableSeeder extends Seeder {

	public function run() {
		DB::table('servidores')->delete();
		$servidores = [
			['nombre' => 'YouTube', 'logo' => 'youtube.jpg'],
			['nombre' => 'Metacafe', 'logo' => 'metacafe.jpg'],
			['nombre' => 'Dailymotion', 'logo' => 'dailymotion.jpg']
		];
		DB::table('servidores')->insert($servidores);


		DB::table('videos')->delete();
		$videos = [
			/************************** LIGA BBVA 2014 ************************************/
			//Jornada 1
			['nombre' => 'Real Madrid (2-0) Córdoba', 'enlace' => 'SbEkh3ihgH4', 'partido_id' => 1, 'servidor_id' => 1],
			['nombre' => 'Rayo Vallecano 0-0 Atl. Madrid', 'enlace' => 'qKtJfrzuSzo', 'partido_id' => 2, 'servidor_id' => 1],
			['nombre' => 'Eibar 1-0 Real Sociedad', 'enlace' => 'HlfokgHOHKk', 'partido_id' => 3, 'servidor_id' => 1],
			['nombre' => 'Barcelona 3-0 Elche', 'enlace' => '_PDsXRAvrfY', 'partido_id' => 4, 'servidor_id' => 1],
			['nombre' => 'Celta 3-1 Getafe', 'enlace' => 'WGDXwOP5aB8', 'partido_id' => 5, 'servidor_id' => 1],
			['nombre' => 'Levante 0-2 Villarreal', 'enlace' => 'ESasln_aKSE', 'partido_id' => 6, 'servidor_id' => 1],
			['nombre' => 'Málaga 1-0 Ath. Bilbao', 'enlace' => 'DqcmPnuwaOU', 'partido_id' => 7, 'servidor_id' => 1],
			['nombre' => 'Sevilla 1-1 Valencia', 'enlace' => 'qeW4qkfV2a4', 'partido_id' => 8, 'servidor_id' => 1],
			['nombre' => 'Granada 2-1 Deportivo', 'enlace' => 'Gf6wozIZi1M', 'partido_id' => 9, 'servidor_id' => 1],
			['nombre' => 'Almeria 1-1 Espanyol', 'enlace' => 'iUl8WujRyGE', 'partido_id' => 10, 'servidor_id' => 1],
			//Jornada 2
			['nombre' => 'Real Sociedad 4-2 Real Madrid', 'enlace' => 'lJ1K3TDIhTI', 'partido_id' => 11, 'servidor_id' => 1],
			['nombre' => 'Deportivo de la Coruña 2-2 Rayo Vallecano', 'enlace' => 'a0AvQhnWG6k', 'partido_id' => 12, 'servidor_id' => 1],
			['nombre' => 'Elche CF 1-1 Granada CF', 'enlace' => 'SsCDtlbJokk', 'partido_id' => 13, 'servidor_id' => 1],
			['nombre' => 'Villarreal CF 0-1 FC Barcelona', 'enlace' => 'diO2me-9LG8', 'partido_id' => 14, 'servidor_id' => 1],
			['nombre' => 'UD Almería 1-0 Getafe CF', 'enlace' => '3cdkGHv2DjY', 'partido_id' => 15, 'servidor_id' => 1],
			['nombre' => 'Valencia CF 3-0 Málaga CF', 'enlace' => 'QPMcRyJzDRc', 'partido_id' => 16, 'servidor_id' => 1],
			['nombre' => 'Athletic Club 3-0 Levante UD', 'enlace' => 'kkBQijjBWL0', 'partido_id' => 17, 'servidor_id' => 1],
			['nombre' => 'Córdoba CF 1-1 Celta de Vigo', 'enlace' => 'CmgXT0-gfMI', 'partido_id' => 18, 'servidor_id' => 1],
			['nombre' => 'Atlético de Madrid 2-1 SD Eibar', 'enlace' => 'x8RdHynAAU4', 'partido_id' => 19, 'servidor_id' => 1],
			['nombre' => 'RCD Espanyol 1-2 Sevilla FC', 'enlace' => 'e8JZA9QcxUA', 'partido_id' => 20, 'servidor_id' => 1],

			/************************** LIGA ACB 2014 ************************************/
			//Jornada 1
			['nombre' => 'Sevilla 87-96 Tenerife', 'enlace' => 'iEpIx_yrufQ', 'partido_id' => 21, 'servidor_id' => 1],
			['nombre' => 'Obradoiro 88-64 Manresa', 'enlace' => 'oCaBDcU0KG4', 'partido_id' => 22, 'servidor_id' => 1],
			['nombre' => 'Barcelona 87-65 Baskonia', 'enlace' => 'oCaBDcU0KG4', 'partido_id' => 23, 'servidor_id' => 1],
			['nombre' => 'Bilbao Basket 73-54 Fuenlabrada', 'enlace' => 'OMejCcnbT9U', 'partido_id' => 24, 'servidor_id' => 1],
			['nombre' => 'Murcia 86-76 Valencia Basket', 'enlace' => 'ge0QPJQnyxA', 'partido_id' => 25, 'servidor_id' => 1],
			['nombre' => 'Real Madrid 70-57 Gran Canaria', 'enlace' => '5h0IPRGOV_0', 'partido_id' => 26, 'servidor_id' => 1],
			['nombre' => 'Unicaja 83-69 Andorra', 'enlace' => 'XpZQSEnAaEg', 'partido_id' => 27, 'servidor_id' => 1],
			['nombre' => 'Zaragoza 74-79 Joventut', 'enlace' => 'YTmHHhEZXNI', 'partido_id' => 28, 'servidor_id' => 1],
			['nombre' => 'Estudiantes 91-74 Gipuzkoa Basket', 'enlace' => 'q4Fj0J6Vdl4', 'partido_id' => 29, 'servidor_id' => 1],

		];
		DB::table('videos')->insert($videos);

		$videos = [
			//enlaces de mierda
			/************************** PREMIER LEAGUE 2015 ************************************/
			//Jornada 1
			['nombre' => 'Man. Utd 1-0 Tottenham Hotspur', 'enlace' => 'zS1322o8q18', 'partido_id' => 30, 'servidor_id' => 1],
			['nombre' => 'Leicester 4-2 Sunderland', 'enlace' => '4u-h34m0vOk', 'partido_id' => 31, 'servidor_id' => 1],
			['nombre' => 'Norwich City 1-3 Crystal Palace', 'enlace' => 'PEJyyDENi_I', 'partido_id' => 32, 'servidor_id' => 1],
			['nombre' => 'Everton 2-2 Watford', 'enlace' => 'prMgfvee6nQ', 'partido_id' => 33, 'servidor_id' => 1],
			['nombre' => 'AFC Bournemouth 0-1 Aston Villa', 'enlace' => '5RYtfvhmTlI', 'partido_id' => 34, 'servidor_id' => 1],
			['nombre' => 'Chelsea 2-2 Swansea City', 'enlace' => 'GKWorUjFPAw', 'partido_id' => 35, 'servidor_id' => 1],
			['nombre' => 'Newcastle 2-2 Southampton', 'enlace' => 'TzCMwqux16M', 'partido_id' => 36, 'servidor_id' => 1],
			['nombre' => 'Arsenal 0-2 West Ham', 'enlace' => 'IXJyWdX32RQ', 'partido_id' => 37, 'servidor_id' => 1],
			['nombre' => 'Stoke City 0-1 Liverpool', 'enlace' => 'xtB3gXxwka4', 'partido_id' => 38, 'servidor_id' => 1],
			['nombre' => 'West Bromwich Albion 0-3 Man. City', 'enlace' => 'mb4P2ZEn_m8', 'partido_id' => 39, 'servidor_id' => 1],


			/************************** LIGA BBVA 2015 ************************************/
			//Jornada 1
			['nombre' => 'Málaga 0-0 Sevilla', 'enlace' => '9lQuW3-dkAQ', 'partido_id' => 40, 'servidor_id' => 1], 
			['nombre' => 'Deportivo 0-0 R. Sociedad', 'enlace' => '8GOmxTmu-Ak', 'partido_id' => 41, 'servidor_id' => 1],
			['nombre' => 'Espanyol 1-0 Getafe', 'enlace' => 'bQx02i4j9LA', 'partido_id' => 42, 'servidor_id' => 1],
			['nombre' => 'Atlético 1-0 Las Palmas', 'enlace' => 'Vzb610yNlBU', 'partido_id' => 43, 'servidor_id' => 1],
			['nombre' => 'Rayo Vallecano 0-0 Valencia', 'enlace' => 'b354ydAPxbw', 'partido_id' => 44, 'servidor_id' => 1],
			['nombre' => 'Athletic 0-1 Barcelona', 'enlace' => 'VGENSjDSgnE', 'partido_id' => 45, 'servidor_id' => 1],
			['nombre' => 'Sporting 0-0 Real Madrid', 'enlace' => '36IxR3c6gzQ', 'partido_id' => 46, 'servidor_id' => 1],
			['nombre' => 'Levante 1-2 Celta', 'enlace' => 'EuLfNaeuMTs', 'partido_id' => 47, 'servidor_id' => 1],
			['nombre' => 'Real Betis 1-1 Villarreal', 'enlace' => 'fwGOqVP7yew', 'partido_id' => 48, 'servidor_id' => 1],
			['nombre' => 'Granada 1-3 Eibar', 'enlace' => 'BJaV-lQQSnc', 'partido_id' => 49, 'servidor_id' => 1],

			//Jornada 2
			['nombre' => 'Villarreal 3-1 Espanyol', 'enlace' => 'iSRkwwiHzTw', 'partido_id' => 50, 'servidor_id' => 1], 
			['nombre' => 'R. Sociedad 0-0 Sporting', 'enlace' => 'o0kWmIt39Fc', 'partido_id' => 51, 'servidor_id' => 1],
			['nombre' => 'Barcelona 1-0 Málaga', 'enlace' => 'STdgLdzT9Tw', 'partido_id' => 52, 'servidor_id' => 1],
			['nombre' => 'Celta 3-0 Rayo Vallecano', 'enlace' => 'm10tNT0UxSI', 'partido_id' => 53, 'servidor_id' => 1],
			['nombre' => 'Real Madrid 5-0 Real Betis', 'enlace' => 'lEHzFA9gPXw', 'partido_id' => 54, 'servidor_id' => 1],
			['nombre' => 'Eibar 2-0 Athletic', 'enlace' => 'lEKhpNjXtmM', 'partido_id' => 55, 'servidor_id' => 1],
			['nombre' => 'Valencia 1-1 Deportivo', 'enlace' => 'ZMDtzGtpuoI', 'partido_id' => 56, 'servidor_id' => 1],
			['nombre' => 'Sevilla 0-3 Atlético', 'enlace' => 'BBppiEoolo4', 'partido_id' => 57, 'servidor_id' => 1],
			['nombre' => 'Getafe 1-2 Granada', 'enlace' => 'ajz0yPlr2nA', 'partido_id' => 58, 'servidor_id' => 1],
			['nombre' => 'Las Palmas 0-0 Levante', 'enlace' => 'WU3xgWVb3DE', 'partido_id' => 59, 'servidor_id' => 1]
		];
		DB::table('videos')->insert($videos);
	}
}