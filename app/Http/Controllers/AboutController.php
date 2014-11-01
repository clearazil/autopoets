<?php namespace App\Http\Controllers;

use Illuminate\Routing\Controller;
use Input;
use Redirect;
use App\About;
use Request;

class AboutController extends Controller {

	public function __construct(About $about) {
		$this->about = $about;
	}
	/**
	 * @Get("about")
	 */
	public function index() {
		$about = $this->about->findOrFail("1");

		$paragraphs = explode(PHP_EOL, $about->body);

		return view('about.index', ['about' => $about, 'paragraphs' => $paragraphs]);
	}

	/**
	 * @Middleware("auth")
	 * @Get("about/edit")
	 * 
	 * 
	 * @return [type] [description]
	 */
	public function edit() {
		$about = $this->about->findOrFail("1");
		return view('about.edit', ['about' => $about]);
	}

	/**
	 * @Middleware("auth")
	 * @Patch("about/edit")
	 * [update description]
	 * @return [type] [description]
	 */
	public function update(Request $request) {

		
		$about = $this->about->findOrFail("1");
		Input::file('image')->move(public_path() . '/images/about', 'about.jpg');

		$about->fill(Input::all())->save();

		return Redirect::to('/about/edit/');
	}
}