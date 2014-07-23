<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreatePresentationTabSectionsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('presentation_tab_sections', function(Blueprint $table)
		{
			$table->increments('id');
			$table->integer('presentation_tab_id')->unsigned();
			$table->string('menu_title');
			$table->boolean('hide_from_menu')->default(0);
			$table->integer('order');
			$table->timestamps();

			$table->foreign('presentation_tab_id')->references('id')->on('presentation_tabs')->onDelete('cascade');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('presentation_tab_sections');
	}

}
