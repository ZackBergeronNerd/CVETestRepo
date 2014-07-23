<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class AddNotifyOnChangeToUserWebsitesTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('user_websites', function(Blueprint $table)
		{
			$table->boolean('notify_on_change')->nullable();
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('user_websites', function(Blueprint $table)
		{
			$table->dropColumn('notify_on_change');
		});
	}

}
