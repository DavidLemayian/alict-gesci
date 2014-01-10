<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateApplicationsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('applications', function(Blueprint $table) {
			$table->increments('id');
			$table->mediumInteger('user_id');
			$table->integer('profile');
			$table->integer('education');
			$table->integer('courses');
			$table->integer('work_history');
			$table->integer('supervisor');
			$table->integer('skills');
			$table->integer('languages');
			$table->integer('statements');
			$table->integer('declarations');
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
		Schema::drop('applications');
	}

}
