@extends('layouts.default')
@section('content')
<section id="content">
    <div class="container_12">
        <div class="">
		<h1>Producten</h1>
		<p>Wij hebben verschillende kleuren autopoets. Geel is op dit moment helaas uitverkocht.</p>
		<ul>
		@foreach($products as $product)
			<li>
				{{ $product->product_name }}
				<img src="{{ $product->product_img }}" alt="{{ $product->product_name }}" class="product-img">
			</li>
		@endforeach
		</ul>
	
		</div>
	</div>
</section>
@stop