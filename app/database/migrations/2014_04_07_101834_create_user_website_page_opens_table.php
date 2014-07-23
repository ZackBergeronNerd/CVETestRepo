<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateUserWebsitePageOpensTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('user_website_page_opens', function(Blueprint $table)
		{
			$table->increments('id');
			$table->integer('client_id')->unsigned();
			$table->integer('user_website_id')->unsigned();
			$table->string('title');
			$table->string('page');
			$table->timestamps();

			$table->foreign('client_id')->references('id')->on('clients')->onDelete('cascade');
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
		Schema::drop('user_website_page_opens');
	}

}
