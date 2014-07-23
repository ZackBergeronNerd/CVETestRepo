<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class MakeNamesNullOnClients extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		DB::statement("ALTER TABLE clients MODIFY first_name varchar(100) DEFAULT NULL");
		DB::statement("ALTER TABLE clients MODIFY last_name varchar(100) DEFAULT NULL");
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		DB::statement("ALTER TABLE clients MODIFY first_name varchar(100) DEFAULT NOT NULL");
		DB::statement("ALTER TABLE clients MODIFY last_name varchar(100) DEFAULT NOT NULL");
	}

}
