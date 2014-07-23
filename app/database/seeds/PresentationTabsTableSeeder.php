<?php

class PresentationTabsTableSeeder extends Seeder {

	public function run()
	{
		/*
			$table->increments('id');
			$table->integer('presentation_id')->unsigned();
			$table->boolean('is_homepage')->default(0);
			$table->string('title');
			$table->string('slug');
			$table->integer('order');
			$table->string('external_url')->nullable();
			*/

		$presentation_tabs = array(
			[
				'presentation_id' => 1,
				'is_homepage' => 1,
				'title' => 'Welcome',
				'slug' => Str::slug('Welcome'),
				'order' => 0
			],
			[
				'presentation_id' => 1,
				'is_homepage' => 0,
				'title' => 'Ownership',
				'slug' => Str::slug('Ownership'),
				'order' => 1
			],
			[
				'presentation_id' => 1,
				'is_homepage' => 0,
				'title' => 'Dollars & Sense',
				'slug' => Str::slug('Dollars & Sense'),
				'order' => 2
			],
			[
				'presentation_id' => 1,
				'is_homepage' => 0,
				'title' => 'The Auberge Experience',
				'slug' => Str::slug('The Auberge Experience'),
				'order' => 3
			],
			[
				'presentation_id' => 1,
				'is_homepage' => 0,
				'title' => 'Floor Plans',
				'slug' => Str::slug('Floor Plans'),
				'order' => 4
			]);

		DB::table('presentation_tabs')->insert($presentation_tabs);
	}

}