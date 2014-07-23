<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateUserDetailsTable extends Migration {

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('user_details', function(Blueprint $table) {
            $table->increments('id');
            $table->integer('user_id')->unsigned();
			$table->string('title')->nullable();
			$table->string('office_number')->nullable();
			$table->string('cell_number')->nullable();
			$table->text('other_info')->nullable();
			$table->string('photo')->nullable();
            $table->string('logo')->nullable();
            $table->timestamps();

            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('user_details');
    }

}
