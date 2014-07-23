<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateTabSectionsTable extends Migration {

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tab_sections', function(Blueprint $table) {
            $table->increments('id');
            $table->integer('package_tab_id')->unsigned();
            $table->integer('order')->nullable()->default(0);
			$table->boolean('header_bool')->nullable()->default(0);
			$table->string('title')->nullable();
			$table->string('subtitle')->nullable();
			$table->text('content')->nullable();
			$table->string('image')->nullable();
            $table->text('video')->nullable();
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
        Schema::drop('tab_sections');
    }

}
