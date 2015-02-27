<?php

// Composer: "fzaninotto/faker": "v1.3.0"
use Faker\Factory as Faker;

class UsersTableSeeder extends Seeder {

	public function run()
	{
		$faker = Faker::create();
        //$locales = Local::lists('id');
        User::truncate();
		foreach(range(1, 30) as $index)
		{
			User::create([
                'email'     =>  $faker->email,
                'password'  =>  Hash::make('12345'),
                //'local_id'  =>  $faker->randomElement($locales)
			]);
		}
	}

}
/*
$table->unsignedInteger('particular_id');
$table->rememberToken();
$table->timestamps();
*/