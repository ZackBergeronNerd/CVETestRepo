<?php

class UpdateClientTemperaturesTableSeeder extends Seeder {

	public function run()
	{

		foreach(Client::all() as $client) {
			if($client->client_temperature_id == 0 || $client->client_temperature_id == null) {
				$user_client = User_client::where('client_id', '=', $client->id)->where('is_owner', '=', 1)->first();
				$client->client_temperature_id = ClientTemperature::where('user_id', '=', $user_client->user_id)->where('name', '=', 'Hot')->first()->id;
				if($client->save()) {
					echo "{$client->id} temperature added!\n";
				} else {
					echo "Error saving temperature id for {$client->id}\n";
				}
			} else {
				echo "{$client->id} already has a temperature.\n";
			}
		}
		
	}

}