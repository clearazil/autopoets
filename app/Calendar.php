<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class Calendar extends Eloquent {
	public $days = [
		'mon' => 1,
		'tue' => 2,
		'wed' => 3,
		'thu' => 4,
		'fri' => 5,
		'sat' => 6,
		'sun' => 7
	];
}