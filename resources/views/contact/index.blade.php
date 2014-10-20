@extends('layouts.default')
@section('nav')
	<nav>
            <ul class="menu">
                <li>{!! link_to('/', 'Home') !!}</li>
                <li>{!! link_to('about', 'Over Mij') !!}</li>
                <li> {!! link_to('calendar', 'Agenda', ['class' => 'active']) !!}</li>
                <li class="fright">{!! link_to('contact', 'Contact') !!}</li>
                <li class="fright">{!! link_to('products', 'Producten') !!}</li>
                <li class="fright un_border">{!! link_to('gallery', 'Gallerij') !!}</li>
            </ul>
	</nav>

@stop
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

