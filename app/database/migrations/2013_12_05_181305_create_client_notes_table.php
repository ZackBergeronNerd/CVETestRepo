<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateClientNotesTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('client_notes', function(Blueprint $table) {
			$table->increments('id');
			$table->integer('client_id')->unsigned();
			$table->text('note');
			$table->timestamps();

			$table->foreign('client_id')->references('id')->on('clients')->onDelete('cascade');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('client_notes');
	}

}
