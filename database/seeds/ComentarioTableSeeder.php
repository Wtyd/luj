<?php

Class ComentarioTableSeeder extends Seeder {

	public function run() {
		//DB::table('comentarios')->delete();
		$comentarios = [
			//la fecha se introduce como mes/dia/año horas:min:segs
			//estados: no_publicado, publicado, moderado, papelera
			['estado' => 2, 'user_id' => 1, 'video_id' => 59, 'comentario' => "Maecenas sit amet eleifend dolor. Aenean.", 'created_at' => date('Y-m-d H:i:s', strtotime('08/30/2015 20:31:00'))],
			['estado' => 2, 'user_id' => 2, 'video_id' => 59, 'comentario' => "Lorem ipsum dolor sit amet, consectetur adipiscing. ", 'created_at' => date('Y-m-d H:i:s', strtotime('08/30/2015 20:33:00'))],
			['estado' => 2, 'user_id' => 3, 'video_id' => 59, 'comentario' => "Nam consectetur est ac lectus varius, ut porta purus iaculis. Aenean condimentum viverra tellus, ultrices vulputate magna lobortis sed. Donec.", 'created_at' => date('Y-m-d H:i:s', strtotime('08/30/2015 20:45:00'))],
			['estado' => 2, 'user_id' => 4, 'video_id' => 59, 'comentario' => "Quisque id ipsum nec urna.", 'created_at' => date('Y-m-d H:i:s', strtotime('08/30/2015 21:03:09'))],
			['estado' => 2, 'user_id' => 5, 'video_id' => 59, 'comentario' => "Vestibulum sit amet fermentum magna, id tempus tellus. Sed dignissim ante in magna laoreet, vitae tempor ipsum facilisis. Sed ex enim, commodo in massa eget, tincidunt volutpat erat. Vivamus vulputate at dui non rutrum. In tempor urna dolor, vitae semper nulla feugiat nec. Sed mollis metus id lacus ultrices viverra.", 'created_at' => date('Y-m-d H:i:s', strtotime('08/30/2015 21:11:15'))],
			['estado' => 2, 'user_id' => 6, 'video_id' => 59, 'comentario' => "Duis vestibulum a dui a.", 'created_at' => date('Y-m-d H:i:s', strtotime('08/30/2015 22:13:25'))],
			['estado' => 2, 'user_id' => 7, 'video_id' => 59, 'comentario' => "Donec euismod odio ut ligula rutrum dapibus. Nunc gravida rutrum lectus, id commodo lacus consectetur eget. Nam velit metus, egestas ut mi vitae, lobortis lobortis metus. Maecenas sed justo eget justo luctus ultricies. Sed finibus felis velit, ac dignissim massa hendrerit sed. In congue velit sit amet dolor facilisis interdum.", 'created_at' => date('Y-m-d H:i:s', strtotime('08/30/2015 21:51:15'))],
			['estado' => 2, 'user_id' => 8, 'video_id' => 59, 'comentario' => "Suspendisse id nulla interdum, pharetra velit id, porta.", 'created_at' => date('Y-m-d H:i:s', strtotime('08/30/2015 22:35:46'))],
			['estado' => 2, 'user_id' => 9, 'video_id' => 59, 'comentario' => "Vestibulum tincidunt velit ut ultrices tempor. Nulla facilisi. Mauris id libero mauris.", 'created_at' => date('Y-m-d H:i:s', strtotime('0/03/2015 16:32:28'))],
			['estado' => 2, 'user_id' => 10, 'video_id' => 59, 'comentario' => "Aliquam mollis sodales massa eu ullamcorper. Mauris commodo leo.", 'created_at' => date('Y-m-d H:i:s', strtotime('0/03/2015 16:45:38'))]
		];
		DB::table('comentarios')->insert($comentarios);
	}
}