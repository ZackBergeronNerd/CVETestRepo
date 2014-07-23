<?php

class PresentationsTableSeeder extends Seeder {

	public function run()
	{
		/*
			$table->increments('id');
			$table->string('name');
			$table->string('language')->default('EN');
			$table->string('subdomain');
			$table->string('logo')->nullable();
			$table->string('favicon')->nullable();
			$table->boolean('disable_contact')->default(0);
			$table->boolean('is_published')->default(0);
			$table->boolean('is_private')->default(1);
			*/


		$presentations = array([
			'name' => 'Calistoga Lodges',
			'subdomain' => 'calistogalodges',
			'logo' => 'calistoga_lodges.png',
			]);

		DB::table('presentations')->insert($presentations);
	}

}