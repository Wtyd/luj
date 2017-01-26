<?php
use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;
Class UserTableSeeder extends Seeder {

	public function run() {

		//DB::table('users')->delete();
		DB::table('users')->truncate();
/*
		$users = [
			['name' => 'Jorge', 'last_name' => 'Martínez', 'photo' => 'http://localhost/luj/public/img/usuarios/1.jpg', 'email' => 'wty@email.com'],
            ['name' => 'Pedro', 'last_name' => 'Sánchez', 'photo' => 'http://localhost/luj/public/img/usuarios/2.jpg', 'email' => 'pedro@email.com'],
			['name' => 'Diego', 'last_name' => 'Maradona', 'photo' => 'http://localhost/luj/public/img/usuarios/3.jpg', 'email' => 'diego@email.com'],
			['name' => 'Maria', 'last_name' => 'Dorada', 'photo' => 'http://localhost/luj/public/img/usuarios/4.jpg', 'email' => 'maria@email.com'],
			['name' => 'Victor', 'last_name' => 'Jara', 'photo' => 'http://localhost/luj/public/img/usuarios/5.jpg', 'email' => 'victor@email.com'],
			['name' => 'Pablo', 'last_name' => 'Motos', 'photo' => 'http://localhost/luj/public/img/usuarios/6.jpg', 'email' => 'pablo@email.com'],
			['name' => 'Ambrosio', 'last_name' => 'Eufrasio', 'photo' => 'http://localhost/luj/public/img/usuarios/7.jpg', 'email' => 'ambrosio@email.com'],
			['name' => 'Federico', 'last_name' => 'Jiménez', 'photo' => 'http://localhost/luj/public/img/usuarios/8.jpg', 'email' => 'fede@email.com'],
			['name' => 'Silvia', 'last_name' => 'Fominaya', 'photo' => 'http://localhost/luj/public/img/usuarios/9.jpg', 'email' => 'silvia@email.com'],
			['name' => 'Bob', 'last_name' => 'Esponja', 'photo' => 'http://localhost/luj/public/img/usuarios/10.jpg', 'email' => 'piñadebajodelmar@email.com']
        ];

		DB::table('users')->insert($users);	*/
		
		
		factory(luj\Models\User::class)->create([
			'name' => 'Jorge',
			'last_name' => 'Martínez',
			'password' => 'admin',
			'photo' => 'http://localhost/luj/public/img/usuarios/1.jpg',
			'email' => 'wty@email.com'
		]);
		factory(luj\Models\User::class, 29)->create();
		

	}
}
