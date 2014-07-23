<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateUserPresentationsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('user_presentations', function(Blueprint $table)
		{
			$table->increments('id');
			$table->integer('user_id')->unsigned();
			$table->integer('presentation_id')->unsigned();
			$table->timestamps();

			$table->foreign('presentation_id')->references('id')->on('presentations')->onDelete('cascade');
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
		Schema::drop('user_presentations');
	}

}
