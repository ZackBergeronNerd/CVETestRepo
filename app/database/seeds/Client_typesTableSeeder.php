<?php

class Client_typesTableSeeder extends Seeder {

	public function run()
	{
		// Uncomment the below to wipe the table clean before populating
		DB::table('client_types')->delete();

		$client_types = array(
			['user_id' => 1, 'name' => 'Buyer'],
			['user_id' => 1, 'name' => 'Seller'],
			['user_id' => 1, 'name' => 'Partner'],
			['user_id' => 11, 'name' => 'Buyer'],
			['user_id' => 11, 'name' => 'Seller'],
			['user_id' => 11, 'name' => 'Partner']
		);

		// Uncomment the below to run the seeder
		DB::table('client_types')->insert($client_types);
	}

}
