@extends('layouts.default')
@section('content')
<section id="content">
    <div class="container_12">
        <div class="">
			@include('calendar/partials/_calendar')	
			@if(isset($calendarInfo))
				<h1>{{ $calendarInfo->title }}</h1>

				<p>{{ $calendarInfo->address }}</p>

				<p>{{ $calendarInfo->description }}</p>
			@endif
		</div>
	</div>
</section>
@stop
