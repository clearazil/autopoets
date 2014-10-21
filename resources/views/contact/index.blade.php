@extends('layouts.default')
@section('content')
<section id="content">
    <div class="container_12">
        <div class="">
        <h1>Contact</h1>
	@if(isset($thanks))
		{{ $thanks }}
	@else
		<p>Vul dit formulier in om contact met mij op te nemen.</p>
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

