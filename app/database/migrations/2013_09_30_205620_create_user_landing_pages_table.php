<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateUserLandingPagesTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('user_landing_pages', function(Blueprint $table) {
			$table->increments('id');
			$table->integer('user_id')->unsigned();
			$table->integer('landing_page_id')->unsigned();
			$table->string('slug');
			$table->timestamps();

			$table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
			$table->foreign('landing_page_id')->references('id')->on('landing_pages')->onDelete('cascade');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('user_landing_pages');
	}

}
