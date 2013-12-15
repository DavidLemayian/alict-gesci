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

		// $this->call('UserTableSeeder');
		$this->call('DeclarationsTableSeeder');
		$this->call('StatementsTableSeeder');
		$this->call('LanguagesTableSeeder');
		$this->call('SkillsTableSeeder');
		$this->call('SupervisorsTableSeeder');
		$this->call('WorksTableSeeder');
		$this->call('EducationsTableSeeder');
		$this->call('CoursesTableSeeder');
		$this->call('ProfilesTableSeeder');
	}

}