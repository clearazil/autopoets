<?php namespace App\Http\Controllers;

use Illuminate\Routing\Controller;
use Auth;
use Input;
use Redirect;

/**
 * @Resource("sessions")
 */
class SessionsController extends Controller {
	/**
	 * @Get("login")
	 * [create description]
	 * @return [type] [description]
	 */
	public function create() {
		if(Auth::check()) {
			return Redirect::to('/admin');
		}
		return view('sessions.create');
	}

	public function store() {
		if (Auth::attempt(Input::only('username', 'password'))) {
			return Redirect::to('/admin');//"Welkom, " . Auth::user()->username;
		}
		return 'failed!';
	}

	/**
	 * @Get("logout")
	 * [destroy description]
	 * @return [type] [description]
	 */
	public function destroy() {
		Auth::logout();

		return Redirect::to('/login');

	}

	/**
	 * @Middleware("auth")
	 * @Get("admin")
	 * [index description]
	 * @return [type] [description]
	 */
	public function index() {
		return view('admin.index');
	}
}