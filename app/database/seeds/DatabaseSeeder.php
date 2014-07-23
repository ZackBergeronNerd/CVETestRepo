<?php

class DatabaseSeeder extends Seeder {

	/**
	 * Run the database seeds.
	 *
	 * @return void
	 */
	public function run()
	{
		Eloquent::unguard();

		$this->call('UsersTableSeeder');
		$this->call('PackagesTableSeeder');
		$this->call('Package_tabsTableSeeder');
		$this->call('User_detailsTableSeeder');
		$this->call('Tab_sectionsTableSeeder');
		$this->call('Contact_formsTableSeeder');
		$this->call('Contact_fieldsTableSeeder');
		$this->call('User_packagesTableSeeder');
		$this->call('Package_contactsTableSeeder');
		$this->call('Landing_pagesTableSeeder');
		$this->call('User_landing_pagesTableSeeder');
		$this->call('Package_landing_pagesTableSeeder');
		$this->call('Landing_page_sectionsTableSeeder');
		$this->call('ClientsTableSeeder');
		$this->call('User_clientsTableSeeder');
		$this->call('Client_notesTableSeeder');
		$this->call('Client_typesTableSeeder');
		$this->call('Client_statusesTableSeeder');
		$this->call('Client_sourcesTableSeeder');
		$this->call('User_package_sendsTableSeeder');
		$this->call('User_package_opensTableSeeder');
		$this->call('User_package_opened_tabsTableSeeder');
		$this->call('User_tokensTableSeeder');
		$this->call('UsersTemperaturesTableSeeder');
	}

}