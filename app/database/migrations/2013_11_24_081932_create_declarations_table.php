<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateDeclarationsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('declarations', function(Blueprint $table) {
			$table->increments('id');
			$table->mediumInteger('user_id');
			$table->boolean('one');
			$table->boolean('two');
			$table->boolean('three');
			$table->boolean('four');
			$table->boolean('five');
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
		Schema::drop('declarations');
	}

}
