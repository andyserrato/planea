<?php

class DatabaseSeeder extends Seeder {

	/**
	 * Run the database seeds.
	 *
	 * @return void
	 */
	public function run()
	{
		Eloquent::unguard();
        DB::statement('SET FOREIGN_KEY_CHECKS=0');
		$this->call('TarifasTableSeeder');
        $this->call('PlatosTableSeeder');
        $this->call('UsersTableSeeder');
        $this->call('LocalesTableSeeder');
        $this->call('MenusTableSeeder');
        $this->call('MenuPlatoTableSeeder');
        DB::statement('SET FOREIGN_KEY_CHECKS=1');
	}

}
