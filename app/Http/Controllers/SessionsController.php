<?php namespace App\Http\Controllers;

use Illuminate\Routing\Controller;
use Auth;
use Input;
use Redirect;

class SessionsController {
	public function create() {
		if(Auth::check()) {
			return Redirect::to('/admin');
		}
		return view('sessions.create');
	}

	public function store() {
		if (Auth::attempt(Input::only('username', 'password'))) {
			return "Welkom, " . Auth::user()->username;
		}
		return 'failed!';
	}

	public function destroy() {
		Auth::logout();

		return Redirect::route('sessions.create');

	}
}