<?php namespace App;

use Illuminate\Database\Eloquent\Model as Eloquent;
use Validator;

class Contact extends Eloquent {
	
	protected $fillable = ['naam', 'email', 'bericht'];

	protected static $rules = [ 
		'naam' => 'required',
		'email' => 'required',
		'bericht' => 'required'
	];

	protected static $messages = [
		'required' => 'Het :attribute veld mag niet leeg zijn.'
	];

	public function isValid() {
	$validation = Validator::make($this->attributes, static::$rules, static::$messages);


	if($validation->passes()) {
		return true;
	}

	$this->errors = $validation->messages();
	return false;
}


}