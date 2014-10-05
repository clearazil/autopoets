<?php namespace App\Http\Controllers;

use Illuminate\Routing\Controller;
use App\Calendar;
use Redirect;

class CalendarController extends Controller {
 
	


	public function index($monthNum = "") {
		if(!strlen($monthNum)) {
			$monthNum = date('n');
		}
		$daysMonth = date('t', mktime(0, 0, 0, $monthNum, 1, date('Y')));
		$firstDay = date('w',mktime(0, 0, 0, $monthNum, 1, date('Y')));

		$year = ceil(($monthNum / 12) -1) + date('Y');

		$month = date('F', mktime(0, 0, 0, $monthNum, 1, date('Y')));

		$calcMonth = $monthNum - ((ceil(($monthNum / 12)-1)*12));

		//$date = Calendar::select('date')->whereRaw("date between '$year-$calcMonth-01' and '$year-$calcMonth-$daysMonth'")->get();
		$dates = Calendar::whereBetween("date", array("$year-$calcMonth-01", "$year-$calcMonth-$daysMonth"))->get();

		$links = [];
		foreach($dates as $date) {
			$links[] = date('j', strtotime($date->date));
		}

		$links = array_flip($links);
		


		if($firstDay == 0) {
			$firstDay = 7;
		}
		$firstDay = $firstDay - 1;
		$prevMonth = date('t', mktime(0, 0, 0, $monthNum-1, 1, date('Y')));
		$days = [];
		for($i=$prevMonth-$firstDay;$i<$prevMonth;$i++) {
			$days[] = $i+1;
		}

		for($i=1;$i<=$daysMonth;$i++) {
			$days[] = $i;
		}
		
		return view('calendar.index', compact('days', 'month', 'monthNum', 'year', 'dates', 'links', 'firstDay'));
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
