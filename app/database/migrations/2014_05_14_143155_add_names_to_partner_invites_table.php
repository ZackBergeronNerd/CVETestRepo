<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class AddNamesToPartnerInvitesTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('partner_invites', function(Blueprint $table)
		{
			$table->string('partner_first');
			$table->string('partner_last');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('partner_invites', function(Blueprint $table)
		{
			$table->dropColumn('partner_first');
			$table->dropColumn('partner_last');
		});
	}

}
