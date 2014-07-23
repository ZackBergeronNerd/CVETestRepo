<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateStyleGuidesTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('style_guides', function(Blueprint $table)
		{
			$table->increments('id');
			$table->string('menu_color');
			$table->string('menu_font_family');
			$table->string('menu_font_color');
			$table->string('menu_hover_color');
			$table->string('sub_menu_font_family');
			$table->string('sub_menu_font_size');
			$table->string('sub_menu_font_color');
			$table->string('sub_menu_hover_color');
			$table->string('content_background_color');
			$table->string('content_font_color');
			$table->string('content_font_family');
			$table->string('content_font_size');
			$table->string('header_font_color');
			$table->string('header_font_size');
			$table->string('header_font_family');
			$table->string('background_color');
			$table->string('background_image');
			$table->string('background_repeat');
			$table->string('background_position');
			$table->string('background_attachment');
			$table->text('custom_css')->nullable();
			$table->timestamps();
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('style_guides');
	}

}
