<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreatePackageLandingPagesTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('package_landing_pages', function(Blueprint $table) {
			$table->increments('id');
			$table->integer('user_package_id')->unsigned();
			$table->integer('landing_page_id')->unsigned();
			$table->timestamps();

			$table->foreign('landing_page_id')->references('id')->on('landing_pages')->onDelete('cascade');
			$table->foreign('user_package_id')->references('id')->on('user_packages')->onDelete('cascade');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('package_landing_pages');
	}

}
