<?php

// Composer: "fzaninotto/faker": "v1.3.0"
use Faker\Factory as Faker;

class MenusTableSeeder extends Seeder {

	public function run()
    {
        $faker = Faker::create();
        $tarifas = Tarifa::lists('id');
        $locales = Local::lists('id');
        Menu::truncate();
        foreach(range(1, 30) as $index)
        {
            Menu::create([
                'foto'      =>  'http://lorempixel.com/200/200/food',
                'local_id'  =>  $faker->randomElement($locales),
                'tarifa_id' =>  $faker->randomElement($tarifas)
            ]);
        }
    }

}
