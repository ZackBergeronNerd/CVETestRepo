<?php

class HeroTabSectionsTableSeeder extends Seeder {

	public function run()
	{
		/*
		$table->increments('id');
			$table->integer('presentation_tab_section_id')->unsigned();
			$table->string('image')->nullable();
			$table->string('video')->nullable();
			$table->string('title')->nullable();
			$table->string('sub_title')->nullable();
			$table->text('left_content')->nullable();
			$table->text('right_content')->nullable();
			*/
		$hero_tab_sections = array(
			[	
				'presentation_tab_section_id' => 1,
				'image' => null,
				'video' => '',
				'title' => 'A Taste of Wine Country Living',
				'sub_title' => 'A Greeting from Mark Harmon, CEO of Auberge Resorts',
				'left_content' => 'Welcome. Please enjoy this short video as Auberge Resorts CEO, Mark Harmon, and Calistoga Ranch Real Estate Director, Josh Dempsey, introduce you to ownership at Calistoga Ranch.',
				'right_content' => null
			]
			);
	}

}