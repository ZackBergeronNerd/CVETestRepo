<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateContactFieldsTable extends Migration {

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('contact_fields', function(Blueprint $table) {
            $table->increments('id');
            $table->integer('contact_form_id')->unsigned();
			$table->text('label')->nullable();
            $table->string('name')->nullable();
			$table->string('type')->nullable();
			$table->integer('order');
            $table->timestamps();

            $table->foreign('contact_form_id')->references('id')->on('contact_forms')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('contact_fields');
    }

}
