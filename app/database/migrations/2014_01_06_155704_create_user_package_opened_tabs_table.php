<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateUserPackageOpenedTabsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('user_package_opened_tabs', function(Blueprint $table) {
			$table->increments('id');
			$table->integer('client_id')->unsigned();
			$table->integer('user_package_id')->unsigned();
			$table->integer('package_tab_id')->unsigned();
			$table->timestamps();

			$table->foreign('client_id')->references('id')->on('clients')->onDelete('cascade');
			$table->foreign('user_package_id')->references('id')->on('user_packages')->onDelete('cascade');
			$table->foreign('package_tab_id')->references('id')->on('package_tabs')->onDelete('cascade');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('user_package_opened_tabs');
	}

}
