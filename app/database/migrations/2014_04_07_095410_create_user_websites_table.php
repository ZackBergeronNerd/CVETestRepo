<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateUserWebsitesTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('user_websites', function(Blueprint $table)
		{
			$table->increments('id');
			$table->integer('user_id')->unsigned();
			$table->integer('website_id')->unsigned();
			$table->timestamps();

			$table->foreign('website_id')->references('id')->on('websites')->onDelete('cascade');
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
		Schema::drop('user_websites');
	}

}
