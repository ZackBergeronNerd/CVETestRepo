<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateUserWebsitesPagesTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('user_websites_pages', function(Blueprint $table)
		{
			$table->increments('id');
			$table->string('url');
			$table->string('hash');
			$table->integer('user_website_id')->unsigned();
			$table->timestamps();

			$table->foreign('user_website_id')->references('id')->on('user_websites')->onDelete('cascade');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('user_websites_pages');
	}

}
