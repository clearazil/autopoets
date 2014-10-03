<?php namespace App\Http\Controllers;

use Illuminate\Routing\Controller;

class CalendarController extends Controller {
 
	/*
		Display the calendar with the current month
	 */
	public function index() {

		$dates = $this->getDate(date('n'));

		return view('calendar.index', [
			'month' => $dates['month'], 
			'monthNum' => $dates['monthNum'], 
			'year' => $dates['year'], 
			'maxDays' => $dates['daysMonth'], 
			'start' => $dates['start'], 
			'prevMonth' => $dates['daysOfPrevMonth']]);
	}

	/*
		Display the calendar with the requested month
	 */
	public function month($monthNum) {

		$dates = $this->getDate($monthNum);
		return view('calendar.index', [
			'month' => $dates['month'], 
			'monthNum' => $monthNum, 
			'year' => $dates['year'], 
			'maxDays' => $dates['daysMonth'], 
			'start' => $dates['start'], 
			'prevMonth' => $dates['daysOfPrevMonth'],
			'daysPrevMonth' => $dates['daysPrevMonth']
		]);
	}

	public function monthDay() {

	}

	/*
		Get the date information needed to display the calendar.
		year: the year to be displayed
		month: the month to be displayed
		monthNum: the numeric value of the month to be displayed
		start: the numeric value of the starting day of month
		daysMonth: the amount of days in month
		daysPrevMonth: the amount of days in the previous month
	 */
	private function getDate($monthNum) {

		$dates['year'] = ceil(($monthNum / 12) -1) + date('Y');
		$dates['month'] = date('F', mktime(0, 0, 0, $monthNum, 1, date('Y')));
		$dates['monthNum'] = $monthNum;
		$dates['start'] = date('w',mktime(0, 0, 0, $monthNum, 1, date('Y')));
		$dates['daysMonth'] = date('t', mktime(0, 0, 0, $monthNum, 1, date('Y')));
		$dates['daysPrevMonth'] = date('t', mktime(0, 0, 0, $monthNum-1, 1, date('Y')));
		
		if($dates['start'] == 0) {
			$dates['start'] = 7;
		}
		$dates['daysOfPrevMonth'] = $this->daysOfPrevMonth($dates['daysPrevMonth'], $dates['start']);
		return $dates;
	}

	/*
		Depending on the start of the current month, get the last number of days of the previous month 
		needed and store them in the prevMonth array.
	 */
	private function daysOfPrevMonth($daysPrevMonth, $start) {

		$prevMonth = [];
		for($i = 0; $i < $start-1; $i++) {
			$prevMonth[$i] = $daysPrevMonth - $i;
		}


		return array_reverse($prevMonth);
	}

}
