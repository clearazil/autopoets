@extends('layouts.default')
@section('nav')
	<span><a href="/">Home</a> <a href="/contact">Contact</a> <a href="/calendar">Kalender</a> <a href="/products">Producten</a></span>
@stop
@section('content')
	<div class="contact">
	@if(isset($thanks))
		{{ $thanks }}
	@endif
	{!! Form::open(['url' => '/contact', 'class' => 'contact']) !!}
		<div class="form-group">
		{!! Form::label('name', 'Naam: ') !!}
		{!! Form::text('name') !!}
		{{ $errors->first('name') }}
		</div>
		<div class="form-group">
		{!! Form::label('email', 'Email: ') !!}
		{!! Form::text('email') !!}
		{{ $errors->first('email') }}
		</div>
		<div class="form-group">
		{!! Form::label('bericht', 'Bericht: ') !!}
		{!! Form::textarea('bericht') !!}
		{{ $errors->first('bericht') }}
		</div>
		{!! Form::submit('Verzenden') !!}
	{!! Form::close() !!}
	</div>
@stop

