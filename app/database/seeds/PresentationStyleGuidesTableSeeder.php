<?php


class PresentationStyleGuidesTableSeeder extends Seeder {

	public function run()
	{
		$presentation_style_guides = array(
				['presentation_id' => 1, 'style_guide_id' => 1]
			);

		DB::table('presentation_style_guides')->insert($presentation_style_guides);
	}

}