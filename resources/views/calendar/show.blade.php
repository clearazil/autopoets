@extends('layouts.default')
@section('content')
<section id="content">
    <div class="container_12">
        <div class="">
	@include('calendar/partials/_calendar')
	
	<h1>{{ $calendarInfo->title }}</h1>

	<p>{{ $calendarInfo->address }}</p>

	<p>{{ $calendarInfo->description }}</p>
		</div>
	</div>
</section>
@stop