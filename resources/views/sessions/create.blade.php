@extends('layouts.default')
@section('content')
<section id="content">
    <div class="container_12">
        <div class="">
			{!! Form::open(['route' => 'sessions.store']) !!}
				<div class="form-group">
					{!! Form::label('username', 'Gebruikersnaam:') !!}
					{!! Form::text('username') !!}
				</div>
				<div class="form-group">
					{!! Form::label('password', 'Wachtwoord:') !!}
					{!! Form::password('password') !!}
				</div>
				{!! Form::submit('Login') !!}
			{!! Form::close() !!}
		</div>
	</div>
</section>
@stop