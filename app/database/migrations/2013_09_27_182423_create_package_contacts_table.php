<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreatePackageContactsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('package_contacts', function(Blueprint $table) {
			$table->increments('id');
			$table->integer('user_id')->unsigned();
			$table->integer('user_package_id')->unsigned();
			$table->integer('order');
			$table->timestamps();

			$table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
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
		Schema::drop('package_contacts');
	}

}
