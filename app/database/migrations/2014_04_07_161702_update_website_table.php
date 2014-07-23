<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class UpdateWebsiteTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		//
		Schema::table('websites', function($table)
		{
		    $table->renameColumn('subdomain', 'domain');
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
		Schema::table('websites', function($table)
		{
				$table->renameColumn('domain', 'subdomain');
		});
	}

}
