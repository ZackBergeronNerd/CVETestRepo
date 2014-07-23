<?php

use Illuminate\Database\Migrations\Migration;

class UpdateUsersSocialNull extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		//
		DB::statement("ALTER TABLE users MODIFY fb_uid bigint(20) DEFAULT NULL");
		DB::statement("ALTER TABLE users MODIFY tw_uid bigint(20) DEFAULT NULL");
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		DB::statement("ALTER TABLE users MODIFY fb_uid bigint(20) DEFAULT NOT NULL");
		DB::statement("ALTER TABLE users MODIFY tw_uid bigint(20) DEFAULT NOT NULL");
	}

}