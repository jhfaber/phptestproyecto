<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<!--
Design by TEMPLATED
http://templated.co
Released for free under the Creative Commons Attribution License

Name       : Assembly 
Description: A two-column, fixed-width design with dark color scheme.
Version    : 1.0
Released   : 20140330

-->
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title></title>
<meta name="keywords" content="" />
<meta name="description" content="" />
<link href="{{asset('http://fonts.googleapis.com/css?family=Didact+Gothic')}}" rel="stylesheet" />
<link href="{{asset('default.css')}}" rel="stylesheet" type="text/css" media="all" />
<link href="{{asset('fonts.css')}}" rel="stylesheet" type="text/css" media="all" />

<!--[if IE 6]><link href="default_ie6.css" rel="stylesheet" type="text/css" /><![endif]-->

</head>
<body>
<div id="header-wrapper">
	<div id="header" class="container">
		<div id="logo">
			<h1><a href="#">Pruebas</a></h1>
		</div>
		<div id="menu">
			<ul>
				<li class="active"><a href="#" accesskey="1" title="">Homepage</a></li>
				<li><a href="#" accesskey="2" title="">Our Clients</a></li>
				<li><a href="#" accesskey="3" title="">About Us</a></li>
				<li><a href="#" accesskey="4" title="">Careers</a></li>
				<li><a href="#" accesskey="5" title="">Contact Us</a></li>
			</ul>
		</div>
	</div>
	<div id="banner" class="container">
		<div class="title">
			<h2>Testeo del archivo</h2>
			<span class="byline" id="byline">Este es un proyecto de testeo</span>
		</div>
		<ul class="actions">
			<li><a href="#" class="button">Comienza a testear</a></li>
		</ul>
	</div>
</div>
<div id="wrapper">
	<div id="three-column" class="container">
		<div class="title">
			<h2>Textos de modificación</h2>
			<span class="byline">Columnas con los textos a modificar body</span>
		</div>
		<div class="boxA">
			<p>
			@yield('contenidoizquierdo')
			

			</p>
			<a href="#" class="button button-alt">More Info</a>
		</div>
		<div class="boxB">
			<p>
				@yield('contenidocentral')
			</p>
			<a href="#" class="button button-alt">More Info</a>
		</div>
		<div class="boxC">
			<p> 
				@yield('contenidoderecho')

			</p>
			<a href="#" class="button button-alt">More Info</a>
		</div>
	</div>
</div>
<div id="welcome">
	<div class="container">
		<div class="title">
			<h2>Fusce ultrices fringilla metus</h2>
			<span class="byline">Donec leo, vivamus fermentum nibh in augue praesent a lacus at urna congue</span>
		</div>
		<p>This is <strong>Assembly</strong>, a free, fully standards-compliant CSS template designed by <a href="http://templated.co" rel="nofollow">TEMPLATED</a>. The photos in this template are from <a href="http://fotogrph.com/"> Fotogrph</a>. This free template is released under the <a href="http://templated.co/license">Creative Commons Attribution</a> license, so you're pretty much free to do whatever you want with it (even use it commercially) provided you give us credit for it. Have fun :) </p>
		<ul class="actions">
			<li><a href="#" class="button">Etiam posuere</a></li>
		</ul>
	</div>
</div>
<div id="copyright" class="container">
	<p>&copy; Untitled. All rights reserved. | Photos by <a href="http://fotogrph.com/">Fotogrph</a> | Design by <a href="http://templated.co" rel="nofollow">TEMPLATED</a>.</p>
</div>
</body>
</html>
