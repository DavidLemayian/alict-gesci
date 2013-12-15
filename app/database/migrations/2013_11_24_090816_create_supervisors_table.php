<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateSupervisorsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('supervisors', function(Blueprint $table) {
			$table->increments('id');
			$table->mediumInteger('user_id');
			$table->text('firstname');
			$table->text('lastname');
			$table->string('title');
			$table->string('work_mobile')->nullable();
			$table->string('telephone')->nullable();
			$table->string('primary_email')->unique();
			$table->string('secondary_email')->unique()->nullable();
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
		Schema::drop('supervisors');
	}

}
