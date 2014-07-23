<?php

class Client_sourcesTableSeeder extends Seeder {

	public function run()
	{
		// Uncomment the below to wipe the table clean before populating
		DB::table('client_sources')->delete();

		$client_sources = array(
			['user_id' => 1, 'name' => 'Search Engine'],
			['user_id' => 1, 'name' => 'Referral'],
			['user_id' => 1, 'name' => 'Walk-in'],
			['user_id' => 1, 'name' => 'Billboard'],
			['user_id' => 1, 'name' => 'Advertisement'],
			['user_id' => 1, 'name' => 'Facebook'],
			['user_id' => 11, 'name' => 'Search Engine'],
			['user_id' => 11, 'name' => 'Referral'],
			['user_id' => 11, 'name' => 'Walk-in'],
			['user_id' => 11, 'name' => 'Billboard'],
			['user_id' => 11, 'name' => 'Advertisement'],
			['user_id' => 11, 'name' => 'Facebook']
		);

		// Uncomment the below to run the seeder
		DB::table('client_sources')->insert($client_sources);
	}

}
