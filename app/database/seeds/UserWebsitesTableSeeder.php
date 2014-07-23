<?php

class UserWebsitesTableSeeder extends Seeder {

	public function run()
	{
		$user_websites = array (
			['user_id' => 1, 'website_id' => 1, 'subdomain' => null],
			['user_id' => 2, 'website_id' => 1, 'subdomain' => 'hull'],
			['user_id' => 11, 'website_id' => 1, 'subdomain' => 'eric'],
            ['user_id' => 11, 'website_id' => 2, 'subdomain' => null],
            ['user_id' => 1, 'website_id' => 2, 'subdomain' => 'ryan']
		);

		//DB::table('user_websites')->insert($user_websites);

        foreach($user_websites as $key => $user_website) {
            $id = $key + 1;
            if(UserWebsite::find($id)) {
                if(DB::table('user_websites')->where('id', $id)->update($user_website)) {
                    echo "user_website ({$id}) updated!\n";
                } else {
                    echo "user_website ({$id}) didnt update...\n";
                }
            } else {
                if(DB::table('user_websites')->insert($user_website)) {
                    echo "user_website ({$id}) was created!\n";
                } else {
                    echo "user_website {{$id}) failed to create...\n";
                }
            }

        }
	}

}
