<?php namespace App\Http\Controllers;

use Illuminate\Routing\Controller;
use App\Calendar;
use Redirect;

class CalendarController {
 
	


	public function index($monthNum = "") {

		$calendar = $this->calendar($monthNum);

		return view('calendar.index', array(
			'days' => $calendar['days'],
			'month' => $calendar['month'],
			'monthNum' => $calendar['monthNum'],
			'year' => $calendar['year'],
			'dates' => $calendar['dates'],
			'links' => $calendar['links'],
			'firstDay' => $calendar['firstDay']
		));
			
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

	public function calendar($monthNum) {

		// if $monthNum is empty, set the month number to the current month
		if(!strlen($monthNum)) {
			$monthNum = date('n');
		}

		// amount of days of the month specified by $monthNum
		$daysMonth = date('t', mktime(0, 0, 0, $monthNum, 1, date('Y')));
		// The first day of $monthNum
		$firstDay = date('w',mktime(0, 0, 0, $monthNum, 1, date('Y')));

		// Get the year
		$year = ceil(($monthNum / 12) -1) + date('Y');
		
		// Get a month number between 1 and 12
		$calcMonth = $monthNum - ((ceil(($monthNum / 12)-1)*12));

		// Get the Dutch translation for the month
		$month = $this->monthDutch($calcMonth);

		// Get all the rows in the Calendar table where the date is between the first day and the last day of the month.
		$dates = Calendar::whereBetween("date", array("$year-$calcMonth-01", "$year-$calcMonth-$daysMonth"))->get();

		// Load all the dates that should be links in the $links array
		$links = [];
		foreach($dates as $date) {
			$links[] = date('j', strtotime($date->date));
		}

		$links = array_flip($links);
		

		// If the month starts on Sunday, set it to 7 (make it the last day of the week)
		if($firstDay == 0) {
			$firstDay = 7;
		}
		$firstDay = $firstDay - 1;

		// Get the amount of days of the previous month
		$prevMonth = date('t', mktime(0, 0, 0, $monthNum-1, 1, date('Y')));
		$days = [];

		//Get the days of the previous month needed in the $days array
		for($i=$prevMonth-$firstDay;$i<$prevMonth;$i++) {
			$days[] = $i+1;
		}

		//Get all the days of the current month and put them into the $days array
		for($i=1;$i<=$daysMonth;$i++) {
			$days[] = $i;
		}

		$calendar['days'] = $days;
		$calendar['month'] = $month;
		$calendar['monthNum'] = $monthNum;
		$calendar['year'] = $year;
		$calendar['dates'] = $dates;
		$calendar['links'] = $links;
		$calendar['firstDay'] = $firstDay;

		return $calendar;
	}

	/*
	 * Show details for the specific days
	 */
	public function show($monthNum, $dayNum) {

		$calendar = $this->calendar($monthNum);
		$calcMonth = $monthNum - ((ceil(($monthNum / 12)-1)*12));
		$date = $calendar['year'] . "-" . $calcMonth . "-" . $dayNum;
		
		$calendarInfo = Calendar::where('date', '=', "$date")->first();


		return view('calendar.index', array(
			'calendarInfo' => $calendarInfo,
			'days' => $calendar['days'],
			'month' => $calendar['month'],
			'monthNum' => $calendar['monthNum'],
			'year' => $calendar['year'],
			'dates' => $calendar['dates'],
			'links' => $calendar['links'],
			'firstDay' => $calendar['firstDay']
		));
	}

	/*
	 * Translate the months into Dutch
	 */
	public function monthDutch($month) {
		$months = [
			1 => 'Januari',
			2 => 'Februari',
			3 => 'Maart',
			4 => 'April',
			5 => 'Mei',
			6 => 'Juni',
			7 => 'Juli',
			8 => 'Augustus',
			9 => 'September',
			10 => 'Oktober',
			11 => 'November',
			12 => 'December'
		];

		return $months[$month];
	}


}
