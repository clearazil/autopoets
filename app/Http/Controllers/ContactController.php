<?php namespace App\Http\Controllers;

use Illuminate\Routing\Controller;
use App\Contact;
use Redirect;
use Mail;
use Input;
use Validator;


class ContactController extends Controller {
	/**
	 * @Get("contact")
	 * [index description]
	 * @return [type] [description]
	 */
	public function index() {
		return view('contact.index');
	}

	/**
	 * @Post("contact")
	 * [send description]
	 * @return [type] [description]
	 */
	public function send() {
		$contact = new Contact(Input::all());
		
		
		if($contact->isValid()) {



			Mail::send('contact.mails.mail', array(	'name' => $contact['naam'], 
													'bericht' => Input::get('bericht')), 
			function($message){

				$message->from(Input::get('email'), Input::get('naam'));
	        	$message->to('derkvanderheide@hotmail.com', 'Derk van der Heide')->subject('Autopoets contact formulier');
	    	});

	    	return view('contact.index')->withThanks("Bedankt voor uw bericht!");

		} else {
			return Redirect::back()->withInput()->withErrors($contact->errors);
		}
		
	}
}