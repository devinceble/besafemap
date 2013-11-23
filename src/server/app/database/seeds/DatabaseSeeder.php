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

		// $this->call('UserTableSeeder');
		$this->call('UsersTableSeeder');
		$this->call('TokensTableSeeder');
		$this->call('PeopleTableSeeder');
		$this->call('MessagesTableSeeder');
		$this->call('LocationsTableSeeder');
		$this->call('PlacesTableSeeder');
		$this->call('DonationsTableSeeder');
	}

}