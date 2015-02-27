<?php

// Composer: "fzaninotto/faker": "v1.3.0"
use Faker\Factory as Faker;

class MenuPlatoTableSeeder extends Seeder {

    public function run()
    {
        $faker = Faker::create();
        //Menu::truncate();
        $platos = Plato::lists('id');
        $menus = Menu::lists('id');
        DB::table('menu_plato')->truncate();
        foreach(range(1, 10) as $index)
        {
            // a real plato id
            // a real menu id
            DB::table('menu_plato')->insert([
                'menu_id'   =>  $faker->randomElement($menus),
                'plato_id'  =>  $faker->randomElement($platos)
            ]);
            // a real plato id
        }
    }

}

