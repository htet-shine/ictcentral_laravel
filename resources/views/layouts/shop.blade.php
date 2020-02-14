<!DOCTYPE html>
<html lang="en">
  <head>
	  <meta charset="utf-8">
	  <meta http-equiv="x-ua-compatible" content="ie=edge">
	  <meta name="viewport" content="width=device-width, initial-scale=1">
	  <meta name="csrf-token" content="{{ csrf_token() }}">
	  {{-- Fonts --}}
	  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto&display=swap">
	  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Oswald&display=swap">
		{{-- Styles --}}
	  {{-- <link href="{{ asset('css/app.css') }}" rel="stylesheet" > --}}
	  <link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet" >
	  <link href="{{ asset('css/all.min.css') }}" rel="stylesheet" >
	  <link href="{{ asset('css/main.css') }}" rel="stylesheet">
		{{-- Scripts --}}
		{{-- <script src="{{ asset('js/jquery.min.js') }}"></script> --}}
		<script src="{{ asset('js/app.js') }}"></script>
		<script src="{{ asset('js/bootstrap.min.js') }}"></script>
		<script src="{{ asset('js/main.js') }}"></script>
	  <title>@yield('title') - {{ config('app.name') }}</title>
</head>
<body>
			
	<nav class="navbar sticky-top navbar-expand-lg navbar-dark bg-dark shadow-sm">
	  <div class="container text-uppercase">
	  	<a class="navbar-brand d-flex" href="{{ url('home') }}">
	  		<img src="{{ asset('images/logo.png') }}" class="logo" alt="logo">
	  		<p class="my-auto ml-2">ICT Central</p>
	  	</a>

	  	<div class="collapse navbar-collapse order-3 order-lg-2" id="navbarSupportedContent">
	  	  <ul class="navbar-nav mr-auto">
	  	    <li class="nav-item">
	  	    	<a href="{{ url('home') }}" class="nav-link">Home</a>
	  	    </li>
	  	    <li class="nav-item">
	  	    	<a href="{{ url('products') }}" class="nav-link">Products</a>
	  	    </li>
	  	    <li class="nav-item">
	  	    	<a href="{{ url('contact') }}" class="nav-link">Contact</a>
	  	    </li>
	  	    <li class="nav-item">
	  	    	<a href="{{ url('about') }}" class="nav-link">About</a>
	  	    </li>
	  	  </ul>
	  	  <ul class="navbar-nav ml-auto">
	  	  	<li class="nav-item">
	  	  		<a href="{{ url('login') }}" class="nav-link">Login</a>
	  	  	</li>
	  	  	<li class="nav-item">
	  	  		<a href="{{ url('register') }}" class="nav-link">Sign Up</a>
	  	  	</li>
	  	  </ul>
	  	</div>

	  	<div class="d-flex flex-row order-2 order-lg-3">
	  		<ul class="navbar-nav flex-row">
	  			<li class="nav-item d-flex pr-3 ">
	  				<a href="{{ url('cart') }}" class="nav-link">Cart</a>
	  				<span class="badge badge-custom my-auto">{{ Cart::instance('default')->count() }}</span>
	  			</li>
	  		</ul>
	  		<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent">
	  		  <span class="navbar-toggler-icon"></span>
	  		</button>
	  	</div>

	  </div>
	</nav>
	
	<main>
		@yield('content')
	</main>

	<footer>
		<div class="container">
			<div class="row p-3">
				<div class="col-md-12 col-lg-4">
					<div class="footer-content-heading">
						<h1>FAQs</h1>
					</div>
					<div class="footer-content-body">
						<p>Blah Blah Blah?</p>
						<p>Blah Blah Blah?</p>
						<p>Blah Blah Blah?</p>
					</div>
				</div>
				<div class="col-md-12 col-lg-4">
					<div class="footer-content-heading">
						<h1>Find Us on Social Media</h1>
					</div>
					<div class="footer-content-body">
						<div class="d-flex">
							<i class="fab fa-facebook"></i>
							<p>Facebook</p>
						</div>
						<div class="d-flex">
							<i class="fab fa-twitter"></i>
							<p>Twitter</p>
						</div>
						<div class="d-flex">
							<i class="fab fa-youtube"></i>
							<p>Youtube</p>
						</div>
					</div>
				</div>
				<div class="col-md-12 col-lg-4">
					<div class="footer-content-heading">
						<h1>Shipping Policies</h1>
					</div>
					<div class="footer-content-body">
						<p>Blah Blah Blah</p>
						<p>Blah Blah Blah</p>
						<p>Blah Blah Blah</p>
					</div>
				</div>
			</div>
		</div>
		<div class="footer-foot text-center">
			<p>&copy; 2019 All rights reserved</p>
		</div>
	</footer>

@yield('extra-js')

</body>
</html>