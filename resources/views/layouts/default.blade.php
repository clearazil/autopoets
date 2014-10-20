<!DOCTYPE html>
<html lang="en">
 <head>
        <meta http-equiv="content-type" content="text/html; charset=utf-8" />
        <title>Some Template Title</title>
    <meta name="description" content="Your description">
    <meta name="keywords" content="Your keywords">
    <meta name="author" content="Your name">
    {!! HTML::style('css/styles.css') !!}
    {!! HTML::style('css/nivo-slider.css', ['media' => 'screen']) !!}
</head>
<body>
<!-- Header -->
<div class="bg-1">
	<header>
    	<div class="header_bg1">
            <div class="header_bg2">
                <h1><a href="#">Errit Sjoerd</a></h1>
				<h2>Autopoets</h2>
            	<div class="main">
        	 		<nav>
				            <ul class="menu">
				                <li>{!! link_to('/', 'Home', ['class' => set_active('/')]) !!}</li>
				                <li>{!! link_to('about', 'Over Mij', ['class' => set_active('about*')]) !!}</li>
				                <li>{!! link_to('calendar', 'Agenda', ['class' => set_active('calendar*')]) !!}</li>
				                <li class="fright">{!! link_to('contact', 'Contact', ['class' => set_active('contact*')]) !!}</li>
				                <li class="fright">{!! link_to('products', 'Producten', ['class' => set_active('products*')]) !!}</li>
				                <li class="fright un_border">{!! link_to('gallery', 'Gallerij', ['class' => set_active('gallery*')]) !!}</li>
				            </ul>
					</nav>
                    <div class="clear"></div>
                </div>
            </div>
        </div>
    </header>
</div>
<!-- Slider -->
<div id="my_slider">
 	
	<div id="slider-wrapper">        
            <div id="slider" class="nivoSlider">
                <img src="images/slider1.jpg" alt="" />
                <img src="images/slider2.jpg" alt=""/>
                <img src="images/slider3.jpg" alt="" />
            </div>        
        </div>

    {!! HTML::script('js/jquery-1.4.3.min.js') !!}
    {!! HTML::script('js/jquery.nivo.slider.pack.js') !!}
 
    <script type="text/javascript">
    $(window).load(function() {
        $('#slider').nivoSlider();
    });
    </script>

</div>
	@yield('content')

<!-- Footer -->
<footer>
	<div class="container_12">
    	<div class="wrapper">
        	<article class="grid_6">
            	<span class="reg-2">Errit Sjoerd</span> &copy; {{ date('Y') }} | <a href="#">Privacy Policy</a><br />
				<!-- Do not remove -->Design by <a href="http://www.metamorphozis.com/" title="Website Templates">Website Templates</a><!-- end -->
            </article>
            <article class="grid_6">
                <div class="wrapper">
                    <ul class="soc_list">
                    	<li><a href="https://www.facebook.com/perloplast"><img src="images/f1.png" alt=""></a></li>
                    	<!--
                    	<li><a href="#"><img src="/images/f2.png" alt=""></a></li>
                    	<li><a href="#"><img src="/images/f3.png" alt=""></a></li>
                    	-->
                    </ul>
                </div>
            </article>
        </div>
    </div>
</footer>
</body>
</html>