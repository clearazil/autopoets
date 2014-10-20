@extends('layouts.default')
@section('nav')
	<nav>
            <ul class="menu">
                <li><a href="/">Home</a></li>
                <li><a href="/#">Over Mij</a></li>
                <li><a class="active" href="/calendar">Agenda</a></li>
                <li class="fright"><a href="/contact">Contact</a></li>
                <li class="fright"><a href="/products">Producten</a></li>
                <li class="fright un_border"><a href="/#">Gallerij</a></li>
            </ul>
	</nav>
@stop
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