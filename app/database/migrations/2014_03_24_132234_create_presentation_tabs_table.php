<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreatePresentationTabsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('presentation_tabs', function(Blueprint $table)
		{
			$table->increments('id');
			$table->integer('presentation_id')->unsigned();
			$table->boolean('is_homepage')->default(0);
			$table->string('title');
			$table->string('slug');
			$table->integer('order');
			$table->string('external_url')->nullable();
			$table->timestamps();

			$table->foreign('presentation_id')->references('id')->on('presentations')->onDelete('cascade');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('presentation_tabs');
	}

}
