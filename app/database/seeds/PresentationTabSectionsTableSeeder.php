<?php
class PresentationTabSectionsTableSeeder extends Seeder {

	public function run()
	{
		/*
			$table->integer('presentation_tab_id')->unsigned();
			$table->string('menu_title');
			$table->boolean('hide_from_menu')->default(0);
			$table->integer('order');
		*/

		$presentation_tab_sections = array(
			['presentation_tab_id' => 1, 'menu_title' => 'Welcome', 'hide_from_menu' => 1, 'order' => 0]
			);

		DB::table('presentation_tab_sections')->insert($presentation_tab_sections);
	}

}