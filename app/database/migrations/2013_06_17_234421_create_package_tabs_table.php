<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreatePackageTabsTable extends Migration {

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('package_tabs', function(Blueprint $table) {
            $table->increments('id');
            $table->integer('package_id')->unsigned();
			$table->boolean('contact_bool')->nullable()->default(0);
            $table->boolean('home_bool')->nullable()->default(0);
			$table->string('title');
            $table->string('slug');
            $table->integer('order');
			$table->string('url')->nullable();
            $table->timestamps();

            $table->foreign('package_id')->references('id')->on('packages')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('package_tabs');
    }

}
