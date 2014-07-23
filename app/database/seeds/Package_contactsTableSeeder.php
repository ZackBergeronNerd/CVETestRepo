<?php

class Package_contactsTableSeeder extends Seeder {

	public function run()
	{
		// Uncomment the below to wipe the table clean before populating
		DB::table('package_contacts')->truncate();

		$package_contacts = array(
			['user_id' => 4, 'user_package_id' => 8, 'order' => 0],
			['user_id' => 10, 'user_package_id' => 11, 'order' => 0],
			['user_id' => 14, 'user_package_id' => 14, 'order' => 0],
			['user_id' => 14, 'user_package_id' => 15, 'order' => 0],
			['user_id' => 14, 'user_package_id' => 16, 'order' => 0],
			['user_id' => 17, 'user_package_id' => 22, 'order' => 0],
			['user_id' => 18, 'user_package_id' => 23, 'order' => 0],
			['user_id' => 19, 'user_package_id' => 26, 'order' => 0],
		);

		// Uncomment the below to run the seeder
		DB::table('package_contacts')->insert($package_contacts);
	}

}
