@extends('layouts.default')
@section('content')
	<!-- Content -->
<section id="content">
    <div class="container_12">
        <div class="">
        	<article class="grid_12">
            	<h1>Over Mij</h1>
                <div class="wrapper margin-bot2">

                </div>
                
                	<figure class="figure-3 img-indent">
                    	<img src="/images/about/about.jpg" alt="">
                    </figure>
                    <div class="extra-wrap">
                    	<a href="#" class="reg-2">{{ $about->title }}</a>
                        
                        @foreach($paragraphs as $paragraph)
                            @if(strlen($paragraph) > 1)
                                <p>{{ $paragraph }}</p>
                            @endif
                        @endforeach

                    </div>
                    <div class="clear"></div>
                
            </article>
        	<div class="clear"></div>
        </div>
    </div>
</section>
@stop