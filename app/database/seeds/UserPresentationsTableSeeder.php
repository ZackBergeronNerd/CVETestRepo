<?php


class UserPresentationsTableSeeder extends Seeder {

	public function run()
	{
		$user_presentations = array([
			'user_id' => 1,
			'presentation_id' => 1
			]);

		DB::table('user_presentations')->insert($user_presentations);
	}

}