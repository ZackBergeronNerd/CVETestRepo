<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateContactFormsTable extends Migration {

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('contact_forms', function(Blueprint $table) {
            $table->increments('id');
            $table->integer('package_tab_id')->unsigned();
			$table->string('title')->nullable();
			$table->string('subtitle')->nullable();
			$table->string('image')->nullable();
			$table->text('content')->nullable();
            $table->timestamps();

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
        Schema::drop('contact_forms');
    }

}
