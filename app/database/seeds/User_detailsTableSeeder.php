<?php

class User_detailsTableSeeder extends Seeder {

    public function run()
    {
    	// Uncomment the below to wipe the table clean before populating
    	//DB::table('user_details')->delete();

        $user_details = array(
            ['user_id' => 1, 'title' => 'Marketing Manager', 'office_number' => null, 'cell_number' => null, 'other_info' => null, 'photo' => null, 'logo' => null],
        	['user_id' => 2, 'title' => 'Sales Executive', 'office_number' => '530-550-3200', 'cell_number' => '530-448-0306', 'other_info' => 'eFax: 530-236-5995', 'photo' => 'JeffHull-2.jpg', 'logo' => null],
            ['user_id' => 3, 'title' => 'Sales Executive', 'office_number' => '530-550-3200', 'cell_number' => '530-386-5945', 'other_info' => 'Fax: 530-550-3211' , 'photo' => 'JonasMikals-3.jpg', 'logo' => null],
            ['user_id' => 4, 'title' => 'Sales Executive', 'office_number' => '530-550-3200', 'cell_number' => null, 'other_info' => null, 'photo' => 'KimHoopingarner-4.jpg', 'logo' => null],
            ['user_id' => 5, 'title' => 'Sales Executive', 'office_number' => '530-550-3200', 'cell_number' => '530-448-1263', 'other_info' => 'Fax: 530-550-3211', 'photo' => 'MarkMurrell-5.jpg', 'logo' => null],
            ['user_id' => 6, 'title' => 'Sales Executive', 'office_number' => '530-550-3200', 'cell_number' => '530-448-3817', 'other_info' => 'Fax: 530-550-3211', 'photo' => 'TomBarrett-6.jpg', 'logo' => null],
            ['user_id' => 7, 'title' => 'Sales Executive', 'office_number' => '530-550-3200', 'cell_number' => null, 'other_info' => 'Fax: 530-550-3211', 'photo' => 'NinaSkylling-Atkins-7.jpg', 'logo' => null],
            ['user_id' => 8, 'title' => 'US Director of Real Estate', 'office_number' => '(224) 500-5495', 'cell_number' => null, 'other_info' => 'Costa Rica direct: 2654 5479<br>Toll free: (800) 867-5762', 'photo' => 'MarkRandall-8.jpg', 'logo' => 'thepalms_logo.png'],
            ['user_id' => 9, 'title' => 'Costa Rica Director of Real Estate', 'office_number' => '+506.2654.5476', 'cell_number' => '+506.8827.7244', 'other_info' => 'From U.S. 800.867.5762', 'photo' => 'AlexBejarano-9.jpg', 'logo' => 'thepalms_logo.png'],
            ['user_id' => 10, 'title' => 'CEO/Owner at Barker Realty', 'office_number' => '(505) 982-9836', 'cell_number' => null, 'other_info' => 'Fax: (505) 986-0097', 'photo' => 'DavidBarker-10.jpg', 'logo' => 'barker_logo.jpg'],
            ['user_id' => 11, 'title' => 'Partner and Senior Vice President<br>Peter Kempf International', 'office_number' => '208.345.6898', 'cell_number' => '208.559.1898', 'other_info' => null, 'photo' => 'eric_bio.jpg', 'logo' => null],
            ['user_id' => 12, 'title' => 'Vice President of International Marketing', 'office_number' => '242.358.5243', 'cell_number' => '242.524.8844', 'other_info' => null, 'photo' => 'StefaniShock-12.jpg', 'logo' => 'grandisle_logo.png'],
            ['user_id' => 13, 'title' => 'PARTNER<br>VICE PRESIDENT OF SALES', 'office_number' => '617.398.7830', 'cell_number' => null, 'other_info' => null, 'photo' => 'BryanDriscoll.jpg', 'logo' => 'vineyards_logo_black.png'],
            ['user_id' => 14, 'title' => 'Certified International Property Specialist', 'office_number' => null, 'cell_number' => null, 'other_info' => 'Direct: +888.415.8326', 'photo' => 'JimAnnMarie.jpg', 'logo' => 'pacificunion_logo.jpg'],
            ['user_id' => 15, 'title' => 'Sales', 'office_number' => '+54 261 438 0021', 'cell_number' => '+54 9 261 4703009', 'other_info' => 'Telephone US: +1 (707) 320-2699<br>Skype: carlos_troconis', 'photo' => 'CarlosTroconis.jpg', 'logo' => 'vineyards_logo_black.png'],
            ['user_id' => 16, 'title' => 'B&D Director<br>Country Manager | Brazil', 'office_number' => '+54 261 438 1031', 'cell_number' => '+54 9 261 6703065', 'other_info' => 'BRA # +55 31 2515-0014 (Joyce)', 'photo' => 'Lucas.jpg', 'logo' => 'vineyards_logo_black.png'],
            ['user_id' => 17, 'title' => 'President / Developer', 'office_number' => '613-686-3946<br>800-267-0653', 'cell_number' => '613-851-0417', 'other_info' => 'Bahamas Cell: 242-524-8068', 'photo' => 'PeterNicholson.jpg', 'logo' => 'grandisle_logo.png'],
            ['user_id' => 18, 'title' => 'Broker<br>Coldwell Banker Lightbourn Realty', 'office_number' => '242-345-0400', 'cell_number' => '242-357-0933', 'other_info' => null, 'photo' => 'Woody.jpg', 'logo' => 'WoodyLogo.png'],
            ['user_id' => 19, 'title' => 'Owner Broker<br>Front Rowe Realty & Island Easy', 'office_number' => '242-336-3440', 'cell_number' => '242-357-0871', 'other_info' => null, 'photo' => 'WendyRowe.jpg', 'logo' => 'FRR_logo.jpg'],
            ['user_id' => 20, 'title' => 'Vines of Mendoza', 'office_number' => null, 'cell_number' => '+1 (707) 341-6774', 'other_info' => 'ARG Mobile # +54 9 (261) 468 0775', 'photo' => 'MichaelEvans.jpg', 'logo' => 'vineyards_logo_black.png'],
        );

        // Uncomment the below to run the seeder
        //DB::table('user_details')->insert($user_details);
        
        foreach($user_details as $key => $user) {
            $id = $key + 1;
            if(DB::table('user_details')->where('id', $id)->update($user)) {
                echo "User ({$id}) updated!\n";
            }
        }
        
    }

}