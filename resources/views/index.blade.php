@extends('layouts.default')
@section('nav')
	<nav>
            <ul class="menu">
                <li><a class="active" href="/">Home</a></li>
                <li><a href="#">Over Mij</a></li>
                <li><a href="/calendar">Agenda</a></li>
                <li class="fright"><a href="contact">Contact</a></li>
                <li class="fright"><a href="products">Producten</a></li>
                <li class="fright un_border"><a href="#">Gallerij</a></li>
            </ul>
	</nav>
@stop
@section('content')
	<!-- Content -->
<section id="content">
    <div class="container_12">
        <div class="">
        	<article class="grid_9">
            	<h1>Recente berichten</h1>
                <div class="wrapper margin-bot2">
                	<time class="time fleft" n>13<br>Sept</time>
                    <div class="extra-wrap indent">
                    	<a href="#" class="reg-2">Sed ut perspiciatis unde omnis</a>
                        <div class="wrapper">
                            <div class="fleft">gepost door admin</div>
                            <a href="#" class="link-2 fright">3 comment(s)</a>
                        </div>
                    </div>
                </div>
                <div class="border-3">
                	<figure class="figure-2 img-indent">
                    	<img src="images/img1.jpg" alt="">
                    </figure>
                    <div class="extra-wrap">
                    	<a href="#" class="reg-2">Aenean nec eros</a>
                        <p>Vivamus eget nibh. Etiam cursus leo vel metus. Proin facilisis condimentum fermentum. Maecenas egestas vehicula tincidunt. Nunc a mattis ligula.  Nulla facilisi. Aenean nec eros. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices pouere cubilia Curae.</p>
                        <p>Proin facilisis condimentum fermentum. Maecenas egestas vehicula tincidunt. Nunc a mattis ligula. Ut pharetra augue nec augue. Nam elit magna, hendrerit sit amet, tincidunt ac, virra sed, nulla. Donec porta diam eu massa. Quisq diam lorem.</p>
                        <a href="#" class="reg-2">lees verder</a>
                    </div>
                    <div class="clear"></div>
                </div>
                <div class="wrapper margin-bot2">
                	<time class="time fleft">10<br>Aug</time>
                    <div class="extra-wrap indent">
                    	<a href="#" class="reg-2">Sed ut perspiciatis unde omnis</a>
                        <div class="wrapper">
                            <div class="fleft">gepost door admin</div>
                            <a href="#" class="link-2 fright">3 comment(s)</a>
                        </div>
                    </div>
                </div>
                <div class="">
                	<figure class="figure-2 img-indent">
                    	<img src="images/img2.jpg" alt="">
                    </figure>
                    <div class="extra-wrap">
                    	<a href="#" class="reg-2">Nam elit magna</a>
                        <p>Vivamus eget nibh. Etiam cursus leo vel metus. Nulla facilisi. Aenean nec eros. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices pouere cubilia Curae. Aenean nec eros. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices pouere cubilia Curae.</p>
                        <p>Ut pharetra augue nec augue. Nam elit magna, hendrerit sit amet, tincidunt ac, virra sed, nulla. Donec porta diam eu massa. Aenean nec eros. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices pouere cubilia Curae. Quisq diam lorem.</p>
                        <a href="#" class="reg-2">lees verder</a>
                    </div>
                    <div class="clear"></div>
                </div>
            </article>
            <article class="grid_3">
            	<h1>Categories</h1>
                <ul class="list-1 margin-bot">
                    <li><a href="#">Aenean nonummy </a></li>
                    <li><a href="#">hendrerit mauris</a></li>
                    <li><a href="#">Phasellus </a></li>
                    <li><a href="#">porta Fusce suscipit</a></li>
                    <li><a href="#">varius mi Cum sociis</a></li>
                    <li><a href="#">natoque penatibus </a></li>
                    <li><a href="#">magnis dis parent</a></li>
                    <li><a href="#">montes nascetur</a></li>
                    <li><a href="#">ridiculus mus Nulla</a></li>
                    <li><a href="#">dui Fusce feugiat</a></li>
                </ul>
                <h1>Archives</h1>
                <ul class="list-1 margin-bot">
                    <li><a href="#">july 2012</a></li>
                    <li><a href="#">june 2012</a></li>
                    <li><a href="#">may 2012</a></li>
                    <li><a href="#">april 2012</a></li>
                    <li><a href="#">march 2012</a></li>
                    <li><a href="#">february 2012</a></li>
                    <li><a href="#">january 2012</a></li>
                </ul>
            </article>
        	<div class="clear"></div>
        </div>
    </div>
</section>
@stop