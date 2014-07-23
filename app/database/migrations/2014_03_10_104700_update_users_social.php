<?php

use Illuminate\Database\Migrations\Migration;

class UpdateUsersSocial extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		//
		Schema::table('users', function($table) {
			$table->biginteger('fb_uid');
			$table->renameColumn('fb_oauth', 'fb_token');
			$table->biginteger('tw_uid');
			$table->renameColumn('tw_oauth', 'tw_token');
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
	}

}