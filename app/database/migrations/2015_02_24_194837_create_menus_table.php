<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMenusTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('menus', function(Blueprint $table)
		{
			$table->increments('id');
            $table->string('foto');
            // $table->string('nombre_menu');
            //$table->string('primer_plato');
            //$table->string('segundo_plato');
            //$table->string('postre');
            $table->unsignedInteger('local_id');
            $table->unsignedInteger('tarifa_id');
            //$table->string('servicio');
            //$table->unsignedInteger('agenda_id');
			$table->timestamps();
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('menus');
	}

}
