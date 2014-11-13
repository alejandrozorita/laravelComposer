<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateCandidatosTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('candidatos', function(Blueprint $table)
		{
			$table->increments('id');
			$table->string("url");
			$table->text("descripcion");
			$table->enum("tipo_trabajo", ['tiempo_completo', 'parcial']);
			$table->integer("id_categoria")->unsigned();
			$table->boolean('disponible');
			$table->string("slugs");
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
		Schema::drop('candidatos');
	}

}
