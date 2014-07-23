<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreatePackagesTable extends Migration {

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('packages', function(Blueprint $table) {
            $table->increments('id');
			$table->string('name');
            $table->string('type')->nullable();
            $table->string('language')->nullable();
            $table->string('country')->nullable();
            $table->string('state')->nullable();
            $table->string('city')->nullable();
            $table->string('postal_code')->nullable();
            $table->string('address')->nullable();
			$table->string('subdomain')->unique();
			$table->string('logo')->nullable();
			$table->string('menu_color')->nullable();
			$table->string('menu_font_family')->nullable();
			$table->string('menu_font_size')->nullable();
			$table->string('menu_font_color')->nullable();
            $table->string('menu_hover_color')->nullable();
			$table->string('menu_font_shadow')->nullable();
            $table->string('sub_menu_font_color')->nullable()->default('#444444');
            $table->string('sub_menu_hover_color')->nullable()->default('#000000');
            $table->string('content_background_color')->nullable()->default('#FFFFFF');
            $table->string('content_font_color')->nullable()->default('#363636');
            $table->string('content_font_family')->nullable();
            $table->string('header_font_color')->nullable()->default('#222222');
            $table->string('header_font_family')->nullable();
            $table->string('header_section_color')->nullable();
			$table->string('background_color')->nullable();
			$table->string('background_image')->nullable();
			$table->string('background_repeat')->nullable();
            $table->string('font_variant')->nullable()->default(null);
            $table->string('bold_font')->nullable()->default(null);
            $table->boolean('disable_contact')->nullable()->default(0);
            $table->string('favicon')->nullable();
            $table->text('email_subject')->nullable();
            $table->text('html_email')->nullable();
            $table->text('other_contact')->nullable();
            $table->text('custom_css')->nullable();
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
        Schema::drop('packages');
    }

}
