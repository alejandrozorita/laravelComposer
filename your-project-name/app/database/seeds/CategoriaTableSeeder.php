<?php

use intranet\Entities\Categoria;

// Composer: "fzaninotto/faker": "v1.3.0"
//use Faker\Factory as Faker;

class CategoriaTableSeeder extends Seeder {

	public function run()
	{
		Categoria::create([
			'id' => 1,
			'name' => "usuario1",
			'slug' => "usuario-uno",
		]);
		Categoria::create([
			'id' => 2,
			'name' => "Usuario 2",
			'slug' => "usuario-dos",
		]);
		Categoria::create([
			'id' => 3,
			'name' => "usuario 3",
			'slug' => "usuario-tres",
		]);
	}

}