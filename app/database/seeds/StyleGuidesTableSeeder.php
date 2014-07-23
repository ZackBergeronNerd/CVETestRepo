<?php


class StyleGuidesTableSeeder extends Seeder {

	public function run()
	{
			/*
				$table->string('menu_color');
			$table->string('menu_font_family');
			$table->string('menu_font_color');
			$table->string('menu_hover_color');
			$table->string('sub_menu_font_family');
			$table->string('sub_menu_font_size');
			$table->string('sub_menu_font_color');
			$table->string('sub_menu_hover_color');
			$table->string('content_background_color');
			$table->string('content_font_color');
			$table->string('content_font_family');
			$table->string('content_font_size');
			$table->string('header_font_color');
			$table->string('header_font_size');
			$table->string('header_font_family');
			$table->string('background_color');
			$table->string('background_image');
			$table->string('background_repeat');
			$table->string('background_position');
			$table->string('background_attachment');
			$table->text('custom_css')->nullable();
			*/

		$style_guides = array(
			[
				'menu_color' => '#61432c',
				'menu_font_family' => '"Raleway", Sans-serif',
				'menu_font_color' => '#e3e3e3',
				'menu_hover_color' => '#ffffff',
				'sub_menu_font_family' => '"Raleway", Sans-serif',
				'sub_menu_font_size' => '16px',
				'sub_menu_font_color' => '#61432C',
				'sub_menu_hover_color' => '#b07b64',
				'content_background_color' => '#ffffff',
				'content_font_color' => '#61432C',
				'content_font_family' => '"Times New Roman", serif',
				'content_font_size' => '15px',
				'header_font_color' => '#61432C',
				'header_font_size' => '28px',
				'header_font_family' => '"Raleway", Sans-serif',
				'background_color' => '#ffffff',
				'background_image' => 'none',
				'background_repeat' => 'none',
				'background_position' => 'none',
				'background_attachment' => 'none',
				'custom_css' => null
			]
			);

		DB::table('style_guides')->insert($style_guides);
	}

}