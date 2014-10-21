@extends('layouts.default')
@section('content')
<section id="content">
    <div class="container_12">
        <div class="">
        <h1>Agenda</h1>
        <div class="calendar">
			@include('calendar/partials/_calendar')	
		</div>	
			@if(isset($calendarInfo))
				<div class="cal-details">
					<h1>{{ $calendarInfo->title }}</h1>

					<p>{{ $calendarInfo->address }}</p>

					<p>{{ $calendarInfo->description }}</p>
				</div>
			@endif
		<div class="clear"></div>
		</div>
	</div>
</section>
@stop
