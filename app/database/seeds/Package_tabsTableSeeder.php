<?php

class Package_tabsTableSeeder extends Seeder {

    public function run()
    {
    	// Uncomment the below to wipe the table clean before populating
    	DB::table('package_tabs')->delete();

        $package_tabs = array(
        	['package_id' => 1, 'title' => 'Welcome', 'slug' => Str::slug('Welcome'), 'home_bool' => 1, 'contact_bool' => 0, 'order' => 0],
        	['package_id' => 1, 'title' => 'Ownership', 'slug' => Str::slug('Ownership'), 'home_bool' => 0, 'contact_bool' => 0, 'order' => 1],
        	['package_id' => 1, 'title' => 'Community', 'slug' => Str::slug('Community'), 'home_bool' => 0, 'contact_bool' => 0, 'order' => 2],
        	['package_id' => 1, 'title' => 'Lifestyle', 'slug' => Str::slug('Lifestyle'), 'home_bool' => 0, 'contact_bool' => 0, 'order' => 3],
        	['package_id' => 1, 'title' => 'Invitation', 'slug' => Str::slug('Invitation'), 'home_bool' => 0, 'contact_bool' => 1, 'order' => 4],
            ['package_id' => 2, 'title' => 'Welcome', 'slug' => Str::slug('Welcome'), 'home_bool' => 1, 'contact_bool' => 0, 'order' => 0],
            ['package_id' => 2, 'title' => 'Ownership', 'slug' => Str::slug('Ownership'), 'home_bool' => 0, 'contact_bool' => 0, 'order' => 1],
            ['package_id' => 2, 'title' => 'Oceanfront Villas', 'slug' => Str::slug('Oceanfront Villas'), 'home_bool' => 0, 'contact_bool' => 0, 'order' => 2],
            ['package_id' => 2, 'title' => 'Living Well', 'slug' => Str::slug('Living Well'), 'home_bool' => 0, 'contact_bool' => 0, 'order' => 3],
            ['package_id' => 2, 'title' => 'Invitation', 'slug' => Str::slug('Invitation'), 'home_bool' => 0, 'contact_bool' => 1, 'order' => 4],
            ['package_id' => 3, 'title' => 'Welcome', 'slug' => Str::slug('Welcome'), 'home_bool' => 1, 'contact_bool' => 0, 'order' => 0],
            ['package_id' => 3, 'title' => 'Ownership', 'slug' => Str::slug('Ownership'), 'home_bool' => 0, 'contact_bool' => 0, 'order' => 1],
            ['package_id' => 3, 'title' => 'Our Wines', 'slug' => Str::slug('Our Wines'), 'home_bool' => 0, 'contact_bool' => 0, 'order' => 2],
            ['package_id' => 3, 'title' => 'Finances', 'slug' => Str::slug('Finances'), 'home_bool' => 0, 'contact_bool' => 0, 'order' => 3],
            ['package_id' => 3, 'title' => 'Resort & Spa', 'slug' => Str::slug('Resort & Spa'), 'home_bool' => 0, 'contact_bool' => 0, 'order' => 4],
            ['package_id' => 3, 'title' => 'Invitation', 'slug' => Str::slug('Invitation'), 'home_bool' => 0, 'contact_bool' => 1, 'order' => 5],
            ['package_id' => 4, 'title' => 'Welcome', 'slug' => Str::slug('Welcome'), 'home_bool' => 1, 'contact_bool' => 0, 'order' => 0],
            ['package_id' => 4, 'title' => 'Privileges', 'slug' => Str::slug('Privileges'), 'home_bool' => 0, 'contact_bool' => 0, 'order' => 4],
            ['package_id' => 4, 'title' => 'Pricing', 'slug' => Str::slug('Ownership'), 'home_bool' => 0, 'contact_bool' => 0, 'order' => 1],
            ['package_id' => 4, 'title' => 'Dollars & Sense', 'slug' => Str::slug('Dollars & Sense'), 'home_bool' => 0, 'contact_bool' => 0, 'order' => 2],
            ['package_id' => 4, 'title' => 'Travel The World', 'slug' => Str::slug('Travel The World'), 'home_bool' => 0, 'contact_bool' => 0, 'order' => 3],
            ['package_id' => 4, 'title' => 'Invitation', 'slug' => Str::slug('Invitation'), 'home_bool' => 0, 'contact_bool' => 1, 'order' => 5],
            ['package_id' => 5, 'title' => 'Bienvenidos', 'slug' => Str::slug('Bienvenidos'), 'home_bool' => 1, 'contact_bool' => 0, 'order' => 0],
            ['package_id' => 5, 'title' => 'Propiedad', 'slug' => Str::slug('Propiedad'), 'home_bool' => 0, 'contact_bool' => 0, 'order' => 1],
            ['package_id' => 5, 'title' => 'Nuestros vinos', 'slug' => Str::slug('Nuestros vinos'), 'home_bool' => 0, 'contact_bool' => 0, 'order' => 2],
            ['package_id' => 5, 'title' => 'Finanzas', 'slug' => Str::slug('Finanzas'), 'home_bool' => 0, 'contact_bool' => 0, 'order' => 3],
            ['package_id' => 5, 'title' => 'Resort & Spa', 'slug' => Str::slug('Resort & Spa'), 'home_bool' => 0, 'contact_bool' => 0, 'order' => 4],
            ['package_id' => 5, 'title' => 'Invitación', 'slug' => Str::slug('Invitación'), 'home_bool' => 0, 'contact_bool' => 1, 'order' => 5],
            ['package_id' => 6, 'title' => 'Bem-vindo', 'slug' => Str::slug('Bem-vindo'), 'home_bool' => 1, 'contact_bool' => 0, 'order' => 0],
            ['package_id' => 6, 'title' => 'Propriedade', 'slug' => Str::slug('Propriedade'), 'home_bool' => 0, 'contact_bool' => 0, 'order' => 1],
            ['package_id' => 6, 'title' => 'Nossos Vinhos', 'slug' => Str::slug('Nossos Vinhos'), 'home_bool' => 0, 'contact_bool' => 0, 'order' => 2],
            ['package_id' => 6, 'title' => 'Finanças', 'slug' => Str::slug('Finanças'), 'home_bool' => 0, 'contact_bool' => 0, 'order' => 3],
            ['package_id' => 6, 'title' => 'Resort & Spa', 'slug' => Str::slug('Resort & Spa'), 'home_bool' => 0, 'contact_bool' => 0, 'order' => 4],
            ['package_id' => 6, 'title' => 'Seu Convite', 'slug' => Str::slug('Seu Convite'), 'home_bool' => 0, 'contact_bool' => 1, 'order' => 5],
        );

        // Uncomment the below to run the seeder
        DB::table('package_tabs')->insert($package_tabs);
    }

}