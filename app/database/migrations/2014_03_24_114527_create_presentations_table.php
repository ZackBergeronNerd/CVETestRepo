<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreatePresentationsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('presentations', function(Blueprint $table)
		{
			$table->increments('id');
			$table->string('name');
			$table->string('language')->default('EN');
			$table->string('subdomain');
			$table->string('logo')->nullable();
			$table->string('favicon')->nullable();
			$table->boolean('disable_contact')->default(0);
			$table->boolean('is_published')->default(0);
			$table->boolean('is_private')->default(1);
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
		Schema::drop('presentations');
	}

}
