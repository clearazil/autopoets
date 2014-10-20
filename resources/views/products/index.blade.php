@extends('layouts.default')
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