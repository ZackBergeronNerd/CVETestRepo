<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateStandardTabSectionsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('standard_tab_sections', function(Blueprint $table)
		{
			$table->increments('id');
			$table->integer('presentation_tab_section_id')->unsigned();
			$table->string('first_media')->nullable();
			$table->string('second_media')->nullable();
			$table->string('third_media')->nullable();
			$table->boolean('is_full_width')->nullable();
			$table->boolean('is_half_width')->nullable();
			$table->boolean('is_two_thirds_width')->nullable();
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
		Schema::drop('standard_tab_sections');
	}

}
