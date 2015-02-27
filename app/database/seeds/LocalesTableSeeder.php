<?php

// Composer: "fzaninotto/faker": "v1.3.0"
use Faker\Factory as Faker;

class LocalesTableSeeder extends Seeder {

	public function run()
	{
		$faker = Faker::create();
        $users = User::lists('id');
        Local::truncate();
		foreach(range(1, 30) as $index)
		{
			Local::create([
                'tipo_local'    =>  'restaurante',
                'nombre'        =>  $faker->company,
                'telefono'      =>  $faker->numberBetween($min = 600000000, $max = 999999999),
                'latitud'       =>  $faker->latitude,
                'longitud'      =>  $faker->longitude,
                'direccion'    =>  $faker->address,
                'descripcion'   =>  $faker->sentence($nbWords = 6),
                'user_id'       =>  $faker->unique()->randomElement($users),
			]);
		}
	}

}

