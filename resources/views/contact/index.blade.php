@extends('layouts.default')
@section('content')
<section id="content">
    <div class="container_12">
        <div class="">
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
	</div>
</section>

@stop

