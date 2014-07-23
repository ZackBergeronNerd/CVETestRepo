<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class UpdateClientsWithTemperatures extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		//
		Schema::table('clients', function($table) {
			$table->integer('client_temperature_id')->unsigned()->foreign('client_temperature_id')->references('id')->on('client_temperatures')->onDelete('cascade');;
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('clients', function($table) {
            $table->dropColumn('client_temperature_id');
        });
	}

}
