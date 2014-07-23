<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreatePartnerInvitesTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('partner_invites', function(Blueprint $table)
		{
			$table->increments('id');
			$table->integer('user_website_id')->unsigned();
			$table->integer('user_id')->unsigned();
			$table->string('partner_email');
			$table->string('subdomain');
			$table->string('invite_code');
			$table->timestamps();

            $table->foreign('user_website_id')->references('id')->on('user_websites')->onDelete('cascade');
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('partner_invites');
	}

}
