<?php

class UsersTableSeeder extends Seeder {

    public function run()
    {
    	// Uncomment the below to wipe the table clean before populating
    	//DB::table('users')->delete();

        $users = array(
        	['email' => 'ryan@kempfintl.com', 'first_name' => 'Ryan', 'last_name' => 'Hanson', 'name' => 'MartisCamp Admin', 'password' => Hash::make('password'), 'is_superadmin' => 1],
            ['email' => 'jhull@martiscamp.com', 'first_name' => 'Jeff', 'last_name' => 'Hull', 'name' => 'Jeff Hull', 'password' => Hash::make('password'), 'is_superadmin' => 0],
            ['email' => 'jmikals@martiscamp.com', 'first_name' => 'Jonas', 'last_name' => 'Mikals', 'name' => 'Jonas Mikals', 'password' => Hash::make('password'), 'is_superadmin' => 0],
            ['email' => 'khoopingarner@martiscamp.com', 'first_name' => '', 'last_name' => '', 'name' => 'Kim Hoopingarner', 'password' => Hash::make('password'), 'is_superadmin' => 0],
            ['email' => 'mmurrell@martiscamp.com', 'first_name' => '', 'last_name' => '', 'name' => 'Mark Murrell', 'password' => Hash::make('password'), 'is_superadmin' => 0],
            ['email' => 'tbarrett@martiscamp.com', 'first_name' => '', 'last_name' => '', 'name' => 'Tom Barrett', 'password' => Hash::make('password'), 'is_superadmin' => 0],
            ['email' => 'natkins@martiscamp.com', 'first_name' => '', 'last_name' => '', 'name' => 'Nina Skylling-Atkins', 'password' => Hash::make('password'), 'is_superadmin' => 0],
            ['email' => 'mark@palmscostarica.com', 'first_name' => '', 'last_name' => '', 'name' => 'Mark Randall', 'password' => Hash::make('password'), 'is_superadmin' => 0],
            ['email' => 'alex@palmscostarica.com', 'first_name' => '', 'last_name' => '', 'name' => 'Alex Bejarano', 'password' => Hash::make('password'), 'is_superadmin' => 0],
            ['email' => 'dbarker@santaferealestate.com', 'first_name' => '', 'last_name' => '', 'name' => 'David Barker', 'password' => Hash::make('password'), 'is_superadmin' => 0],
            ['email' => 'eric@kempfintl.com', 'first_name' => 'Eric', 'last_name' => 'Pierce', 'name' => 'Eric Pierce', 'password' => Hash::make('password'), 'is_superadmin' => 1],
            ['email' => 'stefani.shock@grandisleresort.com', 'first_name' => '', 'last_name' => '', 'name' => 'Stefani Shock', 'password' => Hash::make('password'), 'is_superadmin' => 0],
            ['email' => 'bryan@vinesofmendoza.com', 'first_name' => '', 'last_name' => '', 'name' => 'Bryan Driscoll', 'password' => Hash::make('password'), 'is_superadmin' => 0],
            ['email' => 'jim@jimwalberg.com', 'first_name' => '', 'last_name' => '', 'name' => 'Ann Marie and Jim Walberg', 'password' => Hash::make('password'), 'is_superadmin' => 0],
            ['email' => 'carlos.troconis@vinesofmendoza.com', 'first_name' => '', 'last_name' => '', 'name' => 'Carlos Troconis', 'password' => Hash::make('password'), 'is_superadmin' => 0],
            ['email' => 'Lucas@vinesofmendoza.com', 'first_name' => '', 'last_name' => '', 'name' => 'Lucas Abihaggle', 'password' => Hash::make('password'), 'is_superadmin' => 0],
            ['email' => 'peter.nicholson@wcpd.com', 'first_name' => '', 'last_name' => '', 'name' => 'Peter Nicholson', 'password' => Hash::make('password'), 'is_superadmin' => 0],
            ['email' => 'woody@cbbahamas.com', 'first_name' => '', 'last_name' => '', 'name' => 'Collingwood "Woody" Turnquest', 'password' => Hash::make('password'), 'is_superadmin' => 0],
            ['email' => 'wendy@frontrowrealty.com', 'first_name' => '', 'last_name' => '', 'name' => 'Wendy Rowe', 'password' => Hash::make('password'), 'is_superadmin' => 0],
            ['email' => 'michael@vinesofmendoza.com', 'first_name' => 'Michael', 'last_name' => 'Evans', 'name' => 'Michael Evans', 'password' => Hash::make('password'), 'is_superadmin' => 0],
        );

        // Uncomment the below to run the seeder
        //DB::table('users')->insert($users);

        foreach($users as $key => $user) {
            $id = $key + 1;
            if(DB::table('users')->where('id', $id)->update($user)) {
                echo "User ({$id}) updated!\n";
            }
        }

    }

}
