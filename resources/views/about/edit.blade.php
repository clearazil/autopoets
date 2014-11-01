@extends('layouts.default')
@section('content')
	<!-- Content -->
<section id="content">
    <div class="container_12">
        <div class="">
    {!! Form::model($about, ['url' => 'about/edit', 'files' => true, 'method' => 'PATCH']) !!}
        <div class="form-group">
        {!! Form::label('image', 'Afbeelding: ') !!}
        {!! Form::file('image') !!}
        {{ $errors->first('naam') }}
        </div>
        <div class="form-group">
        {!! Form::label('title', 'Titel: ') !!}
        {!! Form::text('title') !!}
        {{ $errors->first('naam') }}
        </div>
        <div class="form-group">
        {!! Form::label('body', 'Bericht: ') !!}
        {!! Form::textarea('body') !!}
        {{ $errors->first('bericht') }}
        </div>
        {!! Form::submit('Verzenden') !!}
    {!! Form::close() !!}
        	<div class="clear"></div>
        </div>
    </div>
</section>
@stop