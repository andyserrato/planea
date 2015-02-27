<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateLocalesTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('locales', function(Blueprint $table)
		{
			$table->increments('id');
            $table->string('tipo_local');
            $table->string('nombre');
            $table->unsignedInteger('telefono');
            //$table->string('coordenada');
            $table->string('direccion'); // esto se puede o se debe normalizar
            $table->float('latitud');
            $table->float('longitud');
            $table->unsignedInteger('user_id');
            //$table->unsignedInteger('direccion_id');
            $table->string('descripcion');
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
		Schema::drop('locales');
	}

}
