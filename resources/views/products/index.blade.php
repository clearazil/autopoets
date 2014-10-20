@extends('layouts.default')
@section('nav')
	<nav>
            <ul class="menu">
                <li><a href="/">Home</a></li>
                <li><a href="#">Over Mij</a></li>
                <li><a class="active" href="/calendar">Agenda</a></li>
                <li class="fright"><a href="contact">Contact</a></li>
                <li class="fright"><a href="products">Producten</a></li>
                <li class="fright un_border"><a href="#">Gallerij</a></li>
            </ul>
	</nav>
@stop
@section('content')
<section id="content">
    <div class="container_12">
        <div class="">
	<div class="products">
		<ul>
		@foreach($products as $product)
			<li>
				{{ $product->product_name }}
				<img src="{{ $product->product_img }}" alt="{{ $product->product_name }}">
			</li>
		@endforeach
		</ul>
	</div>
		</div>
	</div>
</section>
@stop