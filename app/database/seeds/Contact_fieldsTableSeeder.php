<?php

class Contact_fieldsTableSeeder extends Seeder {

    public function run()
    {
    	// Uncomment the below to wipe the table clean before populating
    	DB::table('contact_fields')->delete();

        $contact_fields = array(
        	[	'contact_form_id' => 1,
        		'label' => 'Fill out the form below to contact us with any questions or comments that you may have regarding Martis Camp.',
        		'name' => null,
        		'type' => 'paragraph',
        		'order' => 0],
        	[	'contact_form_id' => 1,
        		'label' => 'First Name:',
        		'name' => 'first_name',
        		'type' => 'text',
        		'order' => 1],
        	[	'contact_form_id' => 1,
        		'label' => 'Last Name:',
        		'name' => 'last_name',
        		'type' => 'text',
        		'order' => 2],
        	[	'contact_form_id' => 1,
        		'label' => 'Phone #:',
        		'name' => 'phone',
        		'type' => 'text',
        		'order' => 3],
        	[	'contact_form_id' => 1,
        		'label' => 'Email:',
        		'name' => 'email',
        		'type' => 'text',
        		'order' => 4],
        	[	'contact_form_id' => 1,
        		'label' => 'Questions or Comments:',
        		'name' => 'comments',
        		'type' => 'textarea',
        		'order' => 5],
            [   'contact_form_id' => 2,
                'label' => 'Now that you have completed your review of our Ownership Packet, you can continue to move forward and request more information or schedule a special Discovery Visit to experience The Palms just as our Owners do!',
                'name' => null,
                'type' => 'paragraph',
                'order' => 0],
            [   'contact_form_id' => 2,
                'label' => '<strong>We are pleased to offer you a very special rate of $399 per night for a beautifully furnished oceanfront villa; more than 60% off the published nightly rate.</strong>',
                'name' => null,
                'type' => 'paragraph',
                'order' => 1],
            [   'contact_form_id' => 2,
                'label' => 'Name:',
                'name' => 'name',
                'type' => 'text',
                'order' => 1],
            [   'contact_form_id' => 2,
                'label' => 'Email:',
                'name' => 'email',
                'type' => 'text',
                'order' => 2],
            [   'contact_form_id' => 2,
                'label' => 'Phone:',
                'name' => 'phone',
                'type' => 'text',
                'order' => 3],
            [   'contact_form_id' => 2,
                'label' => 'Please check all appropriate boxes:',
                'name' => null,
                'type' => 'paragraph',
                'order' => 4],
            [   'contact_form_id' => 2,
                'label' => '“I am interested in receiving more information regarding:”',
                'name' => null,
                'type' => 'paragraph',
                'order' => 5],
            [   'contact_form_id' => 2,
                'label' => 'The Palms Private Residence Club (fractional ownership)',
                'name' => 'interested_palms',
                'type' => 'checkbox',
                'order' => 6],
            [   'contact_form_id' => 2,
                'label' => 'Whole Villa Ownership only',
                'name' => 'interested_villa',
                'type' => 'checkbox',
                'order' => 7],
            [   'contact_form_id' => 2,
                'label' => 'Both options are intriguing at this point',
                'name' => 'interested_both',
                'type' => 'checkbox',
                'order' => 8],
            [   'contact_form_id' => 2,
                'label' => 'I\'m also interested in a Discovery Visit, these dates work best for me:',
                'name' => 'interested_discovery',
                'type' => 'checkbox',
                'order' => 9],
            [   'contact_form_id' => 2,
                'label' => 'Depart Date:',
                'name' => 'depart_date',
                'type' => 'date',
                'order' => 10],
            [   'contact_form_id' => 2,
                'label' => 'Return Date:',
                'name' => 'return_date',
                'type' => 'date',
                'order' => 11],
            [   'contact_form_id' => 3,
                'label' => 'First Name:',
                'name' => 'first_name',
                'type' => 'text',
                'order' => 1],
            [   'contact_form_id' => 3,
                'label' => 'Last Name:',
                'name' => 'last_name',
                'type' => 'text',
                'order' => 2],
            [   'contact_form_id' => 3,
                'label' => 'Contact Email:',
                'name' => 'contact_email',
                'type' => 'text',
                'order' => 3],
            [   'contact_form_id' => 3,
                'label' => 'Contact Phone:',
                'name' => 'contact_phone',
                'type' => 'text',
                'order' => 4],
            [   'contact_form_id' => 3,
                'label' => 'Which Villa would you like to stay in? (subject to availablity)',
                'name' => null,
                'type' => 'paragraph',
                'order' => 5],
            [   'contact_form_id' => 3,
                'label' => 'The Arawak - 1 bed, 1 bath',
                'name' => 'the_arawak',
                'type' => 'checkbox',
                'order' => 6],
            [   'contact_form_id' => 3,
                'label' => 'The Bahia Mar - 2 bed, 2.5 bath',
                'name' => 'bahia_mar',
                'type' => 'checkbox',
                'order' => 7],
            [   'contact_form_id' => 3,
                'label' => 'The Lucayan - 3 bed, 3 bath',
                'name' => 'the_lucayan',
                'type' => 'checkbox',
                'order' => 8],
            [   'contact_form_id' => 3,
                'label' => 'The Grand Villa - 2 bed penthouse, 2.5 bath',
                'name' => 'grand_villa',
                'type' => 'checkbox',
                'order' => 9],
            [   'contact_form_id' => 3,
                'label' => 'The Grand Penthouse - 4 bed penthouse, 4.5 bath',
                'name' => 'grand_penthouse',
                'type' => 'checkbox',
                'order' => 10],
            [   'contact_form_id' => 3,
                'label' => 'When would you like to come?',
                'name' => null,
                'type' => 'paragraph',
                'order' => 11],
            [   'contact_form_id' => 3,
                'label' => 'Depart Date:',
                'name' => 'depart_date',
                'type' => 'date',
                'order' => 12],
            [   'contact_form_id' => 3,
                'label' => 'Return Date:',
                'name' => 'return_date',
                'type' => 'date',
                'order' => 13],
            [   'contact_form_id' => 3,
                'label' => 'Additional comments or questions?',
                'name' => null,
                'type' => 'paragraph',
                'order' => 14],
            [   'contact_form_id' => 3,
                'label' => null,
                'name' => null,
                'type' => 'textarea',
                'order' => 15],
            [   'contact_form_id' => 4,
                'label' => 'Our Private Vineyards are the vineyard ownership experience you’ve always dreamed about.   Work side-by-side with our expert team to make your custom small-batch wine. Jump in and get your hands dirty or leave the details to us. ',
                'name' => null,
                'type' => 'paragraph',
                'order' => 0],
            [   'contact_form_id' => 4,
                'label' => 'Revel in the pride and joy of making your wine, your way from your vineyard. There’s nothing else like it in the world.',
                'name' => null,
                'type' => 'paragraph',
                'order' => 1],
            [   'contact_form_id' => 4,
                'label' => 'First Name:',
                'name' => 'first_name',
                'type' => 'text',
                'order' => 2],
            [   'contact_form_id' => 4,
                'label' => 'Last Name:',
                'name' => 'last_name',
                'type' => 'text',
                'order' => 3],
            [   'contact_form_id' => 4,
                'label' => 'Contact Email:',
                'name' => 'contact_email',
                'type' => 'text',
                'order' => 4],
            [   'contact_form_id' => 4,
                'label' => 'Contact Phone:',
                'name' => 'contact_phone',
                'type' => 'text',
                'order' => 5],
            [   'contact_form_id' => 4,
                'label' => 'I\'m interested in visiting, these dates work best for me:',
                'name' => null,
                'type' => 'paragraph',
                'order' => 6],
            [   'contact_form_id' => 4,
                'label' => 'Arrival Date:',
                'name' => 'arrival_date',
                'type' => 'date',
                'order' => 7],
            [   'contact_form_id' => 4,
                'label' => 'Departure Date:',
                'name' => 'departure_date',
                'type' => 'date',
                'order' => 8],
            [   'contact_form_id' => 4,
                'label' => 'Additional Questions',
                'name' => 'questions',
                'type' => 'textarea',
                'order' => 9],
            [   'contact_form_id' => 4,
                'label' => 'General Comments',
                'name' => 'comments',
                'type' => 'textarea',
                'order' => 10],
            [   'contact_form_id' => 5,
                'label' => 'A través de nuestro programa de Private Vineyards, le ofrecemos la posibilidad de ser propietario del viñedo que siempre soñó, podrá experimentar el orgullo de elaborar su propio vino, ya sea involucrándose activamente en el proceso junto a nuestro equipo de expertos, o simplemente dejando que nos ocupemos de todos los detalles.<br><br>Disfrute del orgullo y la alegría de producir su propio vino, con uvas de su viñedo, a su manera. No existe nada igual en el mundo.',
                'name' => null,
                'type' => 'paragraph',
                'order' => 0],
            [   'contact_form_id' => 5,
                'label' => 'Primer nombre:',
                'name' => 'primer_nombre',
                'type' => 'text',
                'order' => 1],
            [   'contact_form_id' => 5,
                'label' => 'Apellido:',
                'name' => 'apellido',
                'type' => 'text',
                'order' => 2],
            [   'contact_form_id' => 5,
                'label' => 'Correo electrónico:',
                'name' => 'contact_email',
                'type' => 'text',
                'order' => 3],
            [   'contact_form_id' => 5,
                'label' => 'Número de Teléfono:',
                'name' => 'contact_phone',
                'type' => 'text',
                'order' => 4],
            [   'contact_form_id' => 5,
                'label' => 'Me interesa visitar',
                'name' => null,
                'type' => 'paragraph',
                'order' => 5],
            [   'contact_form_id' => 5,
                'label' => 'Fecha de llegada:',
                'name' => 'arrival_date',
                'type' => 'date',
                'order' => 6],
            [   'contact_form_id' => 5,
                'label' => 'Fecha de partida:',
                'name' => 'departure_date',
                'type' => 'date',
                'order' => 7],
            [   'contact_form_id' => 5,
                'label' => 'Tengo otras preguntas',
                'name' => 'questions',
                'type' => 'textarea',
                'order' => 8],
            [   'contact_form_id' => 5,
                'label' => 'Comentarios generales',
                'name' => 'comments',
                'type' => 'textarea',
                'order' => 9],
            [   'contact_form_id' => 6,
                'label' => 'Mendoza é ainda uma fronteira desconhecida, e este é um momento significativo para nossa empresa. Os Private Vineyards oferecem uma extraordinária e gratificante oportunidade de crescimento, tanto em termos pessoais quanto financeiros. Nós encorajamos você a entrar em contato conosco para discutir seus sonhos vinícolas e descobrir o porque mais de 130 donos foram em busca de seu sonho vitalício de possuir um vinhedo conosco. ',
                'name' => null,
                'type' => 'paragraph',
                'order' => 0],
            [   'contact_form_id' => 6,
                'label' => 'Nome:',
                'name' => 'nome',
                'type' => 'text',
                'order' => 1],
            [   'contact_form_id' => 6,
                'label' => 'Sobrenome:',
                'name' => 'sobrenome',
                'type' => 'text',
                'order' => 2],
            [   'contact_form_id' => 6,
                'label' => 'E-Mail:',
                'name' => 'contact_email',
                'type' => 'text',
                'order' => 3],
            [   'contact_form_id' => 6,
                'label' => 'Número de Telefone:',
                'name' => 'contact_phone',
                'type' => 'text',
                'order' => 4],
            [   'contact_form_id' => 6,
                'label' => 'Estou interessado(a) em visitar',
                'name' => null,
                'type' => 'paragraph',
                'order' => 5],
            [   'contact_form_id' => 6,
                'label' => 'Data de chegada:',
                'name' => 'arrival_date',
                'type' => 'date',
                'order' => 6],
            [   'contact_form_id' => 6,
                'label' => 'Data de partida:',
                'name' => 'departure_date',
                'type' => 'date',
                'order' => 7],
            [   'contact_form_id' => 6,
                'label' => 'Eu tenho algumas outras dúvidas',
                'name' => 'questions',
                'type' => 'textarea',
                'order' => 8],
            [   'contact_form_id' => 6,
                'label' => 'Comentários',
                'name' => 'comments',
                'type' => 'textarea',
                'order' => 9],
        );

        // Uncomment the below to run the seeder
        DB::table('contact_fields')->insert($contact_fields);
    }

}