<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Seeds\UsersTableSeeder;

class DatabaseSeeder extends Seeder {

	/**
	 * Run the database seeds.
	 *
	 * @return void
	 */
	public function run()
	{
		Model::unguard();

		$this->call('UserTableSeeder');
	}

}

class CalendarTableSeeder extends Seeder {

	public function run() {
		Calendar::create([
			'title' => 'Hierrrrrr',
			'address' => 'Koekoekshof 35',
			'description' => 'Vandaag sta ik hier!',
			'date' => '30-07-2015'
			]);
	}
}