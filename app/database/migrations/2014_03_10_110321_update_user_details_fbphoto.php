<?php

use Illuminate\Database\Migrations\Migration;

class UpdateUserDetailsFbphoto extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		//
		Schema::table('user_details', function($table) {
			$table->string('fb_photo')->nullable();
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		//
		Schema::table('user_details', function($table) {
			$table->dropColumn('fb_photo')->nullable();
		});
	}

}