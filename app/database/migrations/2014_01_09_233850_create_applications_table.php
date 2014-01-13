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
			$table->integer('profiles')->nullable();
			$table->integer('educations')->nullable();
			$table->integer('courses')->nullable();
			$table->integer('works')->nullable();
			$table->integer('supervisors')->nullable();
			$table->integer('skills')->nullable();
			$table->integer('languages')->nullable();
			$table->integer('statements')->nullable();
			$table->integer('declarations')->nullable();
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
