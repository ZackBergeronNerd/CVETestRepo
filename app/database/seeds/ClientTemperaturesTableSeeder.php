<?php

// Composer: "fzaninotto/faker": "v1.3.0"
use Faker\Factory as Faker;

class ClientTemperaturesTableSeeder extends Seeder {

	public function run()
	{
		DB::table('client_temperatures')->delete();

		$client_temperatures = array(
			['user_id' => 1, 'name' => 'Hot'],
			['user_id' => 1, 'name' => 'Warm'],
			['user_id' => 1, 'name' => 'Cold'],
			['user_id' => 11, 'name' => 'Hot'],
			['user_id' => 11, 'name' => 'Warm'],
			['user_id' => 11, 'name' => 'Cold']
		);

		// Uncomment the below to run the seeder
		DB::table('client_temperatures')->insert($client_temperatures);
	}

}