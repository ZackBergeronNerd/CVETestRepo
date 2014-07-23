<?php

use Illuminate\Database\Migrations\Migration;

class UpdateUsers extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		//
		DB::statement("ALTER TABLE users MODIFY first_name VARCHAR(255) DEFAULT NULL");
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