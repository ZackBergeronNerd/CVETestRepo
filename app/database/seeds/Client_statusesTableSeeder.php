<?php

class Client_statusesTableSeeder extends Seeder {

	public function run()
	{
		// Uncomment the below to wipe the table clean before populating
		DB::table('client_statuses')->delete();

		$client_statuses = array(
			['user_id' => 1, 'name' => 'Active'],
			['user_id' => 1, 'name' => 'Dormant'],
			['user_id' => 1, 'name' => 'Extinct'],
			['user_id' => 11, 'name' => 'Active'],
			['user_id' => 11, 'name' => 'Dormant'],
			['user_id' => 11, 'name' => 'Extinct']
		);

		// Uncomment the below to run the seeder
		DB::table('client_statuses')->insert($client_statuses);
	}

}
