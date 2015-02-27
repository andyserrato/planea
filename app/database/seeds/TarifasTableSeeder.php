<?php

// Composer: "fzaninotto/faker": "v1.3.0"
use Faker\Factory as Faker;

class TarifasTableSeeder extends Seeder {

	public function run()
	{
        $faker = Faker::create();
		Tarifa::truncate();
        Tarifa::create([
            'tarifa'        =>  'XS',
            'precio'        =>  10,
            'descripcion'    =>  'restaurante'
        ]);

        Tarifa::create([
            'tarifa'        =>  'S',
            'precio'        =>  12,
            'descripcion'    =>  'restaurante + discoteca'
        ]);

        Tarifa::create([
            'tarifa'        =>  'M',
            'precio'        =>  15,
            'descripcion'    =>  'restaurante plus + discoteca'
        ]);

        Tarifa::create([
            'tarifa'        =>  'L',
            'precio'        =>  20,
            'descripcion'    =>  'restaurante plus + copa + discoteca'
        ]);

        Tarifa::create([
            'tarifa'        =>  'XL',
            'precio'        =>  35,
            'descripcion'    =>  'restaurante premium + copas + transporte '
        ]);
	}

}
