@extends('layouts.default')
@section('nav')
	<span><a href="/">Home</a> <a href="/contact">Contact</a> <a href="/calendar">Kalender</a> <a href="/products">Producten</a></span>
@stop
@section('content')
	@include('calendar/partials/_calendar')
	
	<h1>{{ $calendarInfo->title }}</h1>

	<p>{{ $calendarInfo->address }}</p>

	<p>{{ $calendarInfo->description }}</p>

@stop