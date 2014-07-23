<?php

class UsersTemperaturesTableSeeder extends Seeder {

	public function run()
	{

		foreach(User::all() as $user) {
			if(!count($client_temperatures = ClientTemperature::where('user_id', '=', $user->id)->get())) {
				$client_temperatures = array(
					['user_id' => $user->id, 'name' => 'Hot'],
					['user_id' => $user->id, 'name' => 'Warm'],
					['user_id' => $user->id, 'name' => 'Cold'],
				);

				// Uncomment the below to run the seeder
				DB::table('client_temperatures')->insert($client_temperatures);
				echo "Temperatures added for {$user->name}!\n";
			} else {
				echo "{$user->name} already had temperatures";
			}
		}
		
	}

}