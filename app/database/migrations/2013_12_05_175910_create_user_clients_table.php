<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateUserClientsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('user_clients', function(Blueprint $table) {
			$table->increments('id');
			$table->integer('user_id')->unsigned();
			$table->integer('client_id')->unsigned();
			$table->boolean('is_owner')->default(1);
			$table->boolean('can_read')->nullable();
			$table->boolean('can_write')->nullable();
			$table->timestamps();

			$table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
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
		Schema::drop('user_clients');
	}

}
