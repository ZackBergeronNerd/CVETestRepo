<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateHeroTabSectionsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('hero_tab_sections', function(Blueprint $table)
		{
			$table->increments('id');
			$table->integer('presentation_tab_section_id')->unsigned();
			$table->string('image')->nullable();
			$table->string('video')->nullable();
			$table->string('title')->nullable();
			$table->string('sub_title')->nullable();
			$table->text('left_content')->nullable();
			$table->text('right_content')->nullable();
			$table->timestamps();

			$table->foreign('presentation_tab_section_id')->references('id')->on('presentation_tab_sections')->onDelete('cascade');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('hero_tab_sections');
	}

}
