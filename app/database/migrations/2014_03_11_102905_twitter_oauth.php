<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class TwitterOauth extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		
		Schema::table('users', function($table) {
			$table->string('tw_secret')->nullable();
		});
		Schema::table('user_details', function($table) {
			$table->string('tw_photo')->nullable();
		});
		DB::statement("ALTER TABLE users MODIFY email VARCHAR(255) DEFAULT NULL");
		
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		//
		Schema::table('users', function($table) {
			$table->dropColumn('tw_secret');
		});
		Schema::table('user_details', function($table) {
			$table->dropColumn('tw_photo');
		});
	}

}
