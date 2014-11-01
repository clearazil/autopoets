<?php namespace App;

use Illuminate\Database\Eloquent\Model as Eloquent;

class About extends Eloquent {
	protected $table = 'about';

	protected $fillable = ['title', 'body'];
}