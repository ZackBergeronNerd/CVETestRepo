<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateUserPackagesTable extends Migration {

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('user_packages', function(Blueprint $table) {
            $table->increments('id');
            $table->integer('user_id')->unsigned();
			$table->integer('package_id')->unsigned();
            $table->boolean('owner')->nullable()->default(1); // Admin (package.cve.io)
            $table->boolean('referral')->nullable()->default(0); // Partner (partner.owner.package.cve.io)
            $table->boolean('agent')->nullable()->default(0); // Owner (owner.package.cve.io)
            $table->text('salesforce_tracking')->nullable();
            $table->string('slug')->nullable();
            $table->timestamps();

            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
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
        Schema::drop('user_packages');
    }

}
