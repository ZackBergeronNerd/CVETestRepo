<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreatePresentationStyleGuidesTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('presentation_style_guides', function(Blueprint $table)
		{
			$table->increments('id');
			$table->integer('presentation_id')->unsigned();
			$table->integer('style_guide_id')->unsigned();
			$table->timestamps();

			$table->foreign('presentation_id')->references('id')->on('presentations')->onDelete('cascade');
            $table->foreign('style_guide_id')->references('id')->on('style_guides')->onDelete('cascade');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('presentation_style_guides');
	}

}
