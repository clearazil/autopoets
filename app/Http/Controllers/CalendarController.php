<?php namespace App\Http\Controllers;

use Illuminate\Routing\Controller;
use App\Calendar;
use Redirect;

class CalendarController extends Controller {
 
	/*
		Display the calendar with the current month
	 */
	public function index() {

		$dates = Calendar::getDate(date('n'));
		//$calendarDates = Calendar::whereDate("2014-11-05")->first();
		$calendarDates = Calendar::get();
		return view('calendar.index', [
			'month' => $dates['month'], 
			'monthNum' => $dates['monthNum'], 
			'year' => $dates['year'], 
			'maxDays' => $dates['daysMonth'], 
			'start' => $dates['start'], 
			'prevMonth' => $dates['daysOfPrevMonth'],
			'calendar' => $calendarDates
		]);
	}

	public function show() {
		$date = Calendar::get();

		return view('calendar.date', compact('date'));
	}

	/*
		Display the calendar with the requested month
	 */
	public function month($monthNum) {

		$dates = Calendar::getDate($monthNum);
		$calendarDates = Calendar::get();
		return view('calendar.index', [
			'month' => $dates['month'], 
			'monthNum' => $monthNum, 
			'year' => $dates['year'], 
			'maxDays' => $dates['daysMonth'], 
			'start' => $dates['start'], 
			'prevMonth' => $dates['daysOfPrevMonth'],
			'calendar' => $calendarDates
		]);
	}

	/*
		Get the full date.
		If the date is invalid, redirect back to the Calendar.
	 */
	public function monthDay($monthNum, $dayNum) {
		$year = ceil(($monthNum / 12) -1) + date('Y');
		$calcMonth = $monthNum - ((ceil(($monthNum / 12)-1)*12));
		if(!checkdate($monthNum,$dayNum,$year)) {
			return Redirect::to('/calendar/' . $monthNum);
		}
		$date = $year . "-" . $calcMonth . "-" . $dayNum;
		return $date;
	}






}
