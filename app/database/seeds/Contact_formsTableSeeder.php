<?php

class Contact_formsTableSeeder extends Seeder {

    public function run()
    {

    	// Uncomment the below to wipe the table clean before populating
    	DB::table('contact_forms')->delete();

        $contact_forms = array(
        	[	'package_tab_id' => 5,
        		'title' => 'Invitation',
                'subtitle' => null,
                'image' => 'martiscamp_5-0-Invitation.jpg',
                'content' => '<p>Now that you have gotten to know a bit more about Martis Camp, we encourage you to come and experience the lifestyle firsthand.  Please call us today or simply complete the form below to start the process of arranging your private tour of Martis Camp.</p>'
                ],
            [   'package_tab_id' => 10,
                'title' => 'Invitation',
                'subtitle' => null,
                'image' => 'thepalms_4-1.jpg',
                'content' => null
                ],
            [   'package_tab_id' => 22,
                'title' => 'Invitation',
                'subtitle' => null,
                'image' => 'grandisle_invitation.jpg',
                'content' => '<p>"Lets schedule your visit. To start, please confirm your contact information below and let us know when you would like to come. We look forward to seeing you soon!"<br><br><span style="text-align:right; float:right">Don Jelinek<br>General Manager<br><br>Stefani Shock<br>Vice President of International Marketing<br>&nbsp;</span></p>'
                ],
            [   'package_tab_id' => 16,
                'title' => 'Your Invitation',
                'subtitle' => 'Join Our Uncommon Adventure',
                'image' => 'vines_6-0-0.jpg',
                'content' => '<p>Join our uncommon adventure! Discover the magic of Argentina, and the pride and joy of making your wine, your way, from your vineyard. There’s nothing else like it in the world.</p>'
                ],
            [   'package_tab_id' => 28,
                'title' => 'Su invitación',
                'subtitle' => '¡Acompáñenos en una aventura singular!',
                'image' => 'vines_6-0-0.jpg',
                'content' => '<p>¡Acompáñenos en una aventura singular! Disfrute del orgullo y la alegría de producir su propio vino, con uvas de su viñedo, a su manera. Es una experiencia única en el mundo. </p>'
                ],
            [   'package_tab_id' => 34,
                'title' => 'Seu Convite',
                'subtitle' => 'Se juntar à nossa aventura incomum',
                'image' => 'vines_6-0-0.jpg',
                'content' => '<p>Junte-se à nossa singular aventura! Descubra a magia da Argentina e o orgulho e as alegrias de produzir seu vinho, de seu jeito, do seu próprio vinhedo. Não há nada igual no mundo.</p>'
                ],
        );

        // Uncomment the below to run the seeder
        DB::table('contact_forms')->insert($contact_forms);
    }

}