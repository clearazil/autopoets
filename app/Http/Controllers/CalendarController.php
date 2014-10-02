<?php namespace App\Http\Controllers;

use Illuminate\Routing\Controller;

class CalendarController extends Controller {
 
	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index() {

		// the start day of the current month
		$start = date('w',mktime(0, 0, 0, date('n'), 1, date('Y')));
		$start = $start - 1;
		// the amount of days of the previous month
		$maxDaysPrevMonth = cal_days_in_month(CAL_GREGORIAN, date('m')-1, date('Y'));
		for($i = 0; $i<$start;$i++) {
			// store the last x days of the previous month in the prevMonth array
			$prevMonth[$i] = $maxDaysPrevMonth -1 + $i;
		}
		// the amount of days in the current month
		$maxDays = cal_days_in_month(CAL_GREGORIAN, date('m'), date('Y'));

		return view('calendar.index', ['maxDays' => $maxDays, 'start' => $start, 'prevMonth' => $prevMonth]);
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		//
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
		//
	}

	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		//
	}

	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		//
	}

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		//
	}

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		//
	}

	public function month() {

	}

	public function monthDay() {

	}

}
