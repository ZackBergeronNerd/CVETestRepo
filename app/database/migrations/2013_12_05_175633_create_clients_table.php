<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateClientsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('clients', function(Blueprint $table) {
			$table->increments('id');
			$table->string('first_name');
			$table->string('last_name');
			$table->string('email')->nullable();
			$table->string('phone_number')->nullable();
			$table->string('address_1')->nullable();
			$table->string('address_2')->nullable();
			$table->string('address_3')->nullable();
			$table->string('city')->nullable();
			$table->string('state')->nullable();
			$table->string('zip')->nullable();
			$table->string('country')->nullable();
			$table->string('referred_by')->nullable();
			$table->integer('client_source_id')->unsigned();
			$table->integer('client_status_id')->unsigned();
			$table->integer('client_type_id')->unsigned();
			$table->timestamps();

			$table->foreign('client_source_id')->references('id')->on('client_sources')->onDelete('cascade');
			$table->foreign('client_status_id')->references('id')->on('client_statuses')->onDelete('cascade');
			$table->foreign('client_type_id')->references('id')->on('client_types')->onDelete('cascade');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('clients');
	}

}
