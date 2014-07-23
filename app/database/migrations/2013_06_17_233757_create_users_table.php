<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateUsersTable extends Migration {

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function(Blueprint $table) {
            $table->increments('id');
            $table->string('email')->unique();
            $table->string('first_name');
            $table->string('last_name');
			$table->string('name');
			$table->string('password')->nullable();
            $table->string('mobile_key')->nullable();
			$table->string('fb_oauth')->nullable();
			$table->string('tw_oauth')->nullable();
			$table->string('li_oauth')->nullable();
			$table->string('go_oauth')->nullable();
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
        Schema::drop('users');
    }

}
