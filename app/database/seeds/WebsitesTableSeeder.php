<?php

class WebsitesTableSeeder extends Seeder {

	public function run()
	{
		$websites = array(
			['name' => 'Martis Camp', 'domain' => 'martistest.cve.io'],
            ['name' => 'Clearview Express', 'domain' => 'clearview.cve.io']
		);

		//DB::table('websites')->insert($websites);
		foreach($websites as $key => $website) {
				$id = $key + 1;
                if(Website::find($id)) {
                    if(DB::table('websites')->where('id', $id)->update($website)) {
                        echo "website ({$id}) updated!\n";
                    } else {
                        echo "website {{$id}) didnt update...\n";
                    }
                } else {
                    if(DB::table('websites')->insert($website)) {
                        echo "website ({$id}) was created!\n";
                    } else {
                        echo "website {{$id}) failed to create...\n";
                    }
                }

		}
		
	}

}
