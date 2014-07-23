<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateLandingPagesTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('landing_pages', function(Blueprint $table) {
			$table->increments('id');
			$table->string('name');
			$table->string('background_color')->nullable()->default("#FFFFFF");
			$table->string('content_background_color')->nullable()->default("#FFFFFF");
			$table->string('content_font_family')->nullable()->default('Times, "Times New Roman", Georgia, serif, sans-serif');
			$table->string('header_font_family')->nullable()->default('Times, "Times New Roman", Georgia, serif, sans-serif');
			$table->string('content_font_color')->nullable()->default("#111111");
			$table->string('header_font_color')->nullable()->default("#111111");
			$table->string('form_background_color')->nullable()->default("#EEEEEE");
			$table->string('logo')->nullable();
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
		Schema::drop('landing_pages');
	}

}
