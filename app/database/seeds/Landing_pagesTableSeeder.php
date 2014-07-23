<?php

class Landing_pagesTableSeeder extends Seeder {

	public function run()
	{
		/*
			Schema::create('landing_pages', function(Blueprint $table) {
			$table->increments('id');
			$table->string('name');
			$table->string('background_color')->nullable()->default("#FFFFFF");
			$table->string('content_background_color')->nullable()->default("#FFFFFF");
			$table->string('content_font_family')->nullable()->default('Times, "Times New Roman", Georgia, serif, sans-serif');
			$table->string('header_font_family')->nullable()->default('Times, "Times New Roman", Georgia, serif, sans-serif');
			$table->string('content_font_color')->nullable()->default("#111111");
			$table->string('header_font_color')->nullable()->default("#111111");
			$table->string('logo')->nullable();
			$table->timestamps();
		});
		*/

		DB::table('landing_pages')->delete();

		$landing_pages = array(
			[	'name' => 'The Palms',
				'background_color' => '#DFD4B4',
				'content_font_family' => "'Adobe Caslon Pro', 'Adobe Garamond Pro', Georgia, 'Times New Roman', serif",
				'header_font_family' => '"Cinzel", serif',
				'form_background_color' => '#beac67'],
			[	'name' => 'Grand Isle Resort',
				'background_color' => '#e2f9ff',
				'content_font_family' => '"Lato", sans-serif',
				'header_font_family' => '"Lato", sans-serif',
				'form_background_color' => '#dadada'],
			[	'name' => 'Grand Isle Resort',
				'background_color' => '#e2f9ff',
				'content_font_family' => '"Lato", sans-serif',
				'header_font_family' => '"Lato", sans-serif',
				'form_background_color' => '#dadada'],
			[	'name' => 'Grand Isle Resort',
				'background_color' => '#e2f9ff',
				'content_font_family' => '"Lato", sans-serif',
				'header_font_family' => '"Lato", sans-serif',
				'form_background_color' => '#dadada'],
			[	'name' => 'Grand Isle Resort',
				'background_color' => '#e2f9ff',
				'content_font_family' => '"Lato", sans-serif',
				'header_font_family' => '"Lato", sans-serif',
				'form_background_color' => '#dadada'],
			[	'name' => 'Grand Isle Resort',
				'background_color' => '#e2f9ff',
				'content_font_family' => '"Lato", sans-serif',
				'header_font_family' => '"Lato", sans-serif',
				'form_background_color' => '#dadada']
		);

		DB::table('landing_pages')->insert($landing_pages);
	}

}
