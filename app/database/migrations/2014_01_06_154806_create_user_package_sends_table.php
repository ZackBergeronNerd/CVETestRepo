<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateUserPackageSendsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('user_package_sends', function(Blueprint $table) {
			$table->increments('id');
			$table->integer('client_id')->unsigned();
			$table->integer('user_package_id')->unsigned();
			$table->timestamps();

			$table->foreign('client_id')->references('id')->on('clients')->onDelete('cascade');
			$table->foreign('user_package_id')->references('id')->on('user_packages')->onDelete('cascade');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('user_package_sends');
	}

}
