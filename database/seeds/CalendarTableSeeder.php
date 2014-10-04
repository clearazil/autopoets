<?php

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