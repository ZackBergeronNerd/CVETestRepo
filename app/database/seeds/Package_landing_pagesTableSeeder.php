<?php

class Package_landing_pagesTableSeeder extends Seeder {

	public function run()
	{
		/*
		Schema::create('package_landing_pages', function(Blueprint $table) {
			$table->increments('id');
			$table->integer('user_package_id')->unsigned();
			$table->integer('landing_page_id')->unsigned();
			$table->timestamps();

			$table->foreign('landing_page_id')->references('id')->on('landing_pages')->onDelete('cascade');
			$table->foreign('user_package_id')->references('id')->on('user_packages')->onDelete('cascade');
		});
		*/

		DB::table('package_landing_pages')->delete();

		$package_landing_pages = array(
			['user_package_id' => 11, 'landing_page_id' => 1],
			['user_package_id' => 15, 'landing_page_id' => 2],
			['user_package_id' => 22, 'landing_page_id' => 3],
			['user_package_id' => 23, 'landing_page_id' => 4],
			['user_package_id' => 26, 'landing_page_id' => 5],
			['user_package_id' => 13, 'landing_page_id' => 6],
		);

		DB::table('package_landing_pages')->insert($package_landing_pages);
	}

}
