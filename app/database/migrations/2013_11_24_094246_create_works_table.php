<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateWorksTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('works', function(Blueprint $table) {
			$table->increments('id');
			$table->mediumInteger('user_id');
			$table->string('sponsoring_organisation');
			$table->string('sector');
			$table->string('role');
			$table->string('number_of_years_in_org');
			$table->string('years_current_position');
			$table->string('individuals_supervised');
			$table->string('years_professional_experience');
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
		Schema::drop('works');
	}

}
