<?php

// Composer: "fzaninotto/faker": "v1.3.0"
use Faker\Factory as Faker;

class CandidatosTableSeeder extends Seeder {

	public function run()
	{
		$faker = Faker::create();

		foreach(range(1, 80) as $index)
		{	
			$nombre = $faker->name;
			
			$user = User::create([
				'Nombre' => $nombre,
				'email' => $faker->email,
				'password' => \Hash::make(123456),
				'type' => 'candidato'
			
			]);
			Candidatos::create([
				'id' => $user->id,
				'url' => $faker->url,
				'description' => $faker->text(100),
				'tipo,trabajo' => $faker->randomElement(['tiempo_completo', 'parcial']),
				'id_categoria' => $faker->randomElement([1,2,3]),
				'disponible' => true,
				'slugs' => \Str::slug($nombre)
			]);
		}
	}

}