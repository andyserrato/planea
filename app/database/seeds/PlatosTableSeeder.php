<?php

// Composer: "fzaninotto/faker": "v1.3.0"
use Faker\Factory as Faker;

class PlatosTableSeeder extends Seeder {

	public function run()
	{
		$faker = Faker::create();
        Plato::truncate();
		foreach(range(1, 100) as $index)
		{
			Plato::create([
                'descripcion'   =>  $faker->word,
			]);
		}
	}

}