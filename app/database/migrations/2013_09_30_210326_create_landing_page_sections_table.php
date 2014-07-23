<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateLandingPageSectionsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('landing_page_sections', function(Blueprint $table) {
			$table->increments('id');
			$table->integer('landing_page_id')->unsigned();
			$table->boolean('header_bool')->default(0);
			$table->integer('order')->default(0);
			$table->text('title')->nullable();
			$table->text('subtitle')->nullable();
			$table->text('content')->nullable();
			$table->timestamps();

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
		Schema::drop('landing_page_sections');
	}

}
