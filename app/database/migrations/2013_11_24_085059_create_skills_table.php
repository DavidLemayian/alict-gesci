<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateSkillsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('skills', function(Blueprint $table) {
			$table->increments('id');
			$table->mediumInteger('user_id');
			$table->string('one');
			$table->string('two');
			$table->string('three');
			$table->string('four');
			$table->string('five');
			$table->string('six');
			$table->string('seven');
			$table->string('eight');
			$table->string('nine');
			$table->string('ten');
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
		Schema::drop('skills');
	}

}
