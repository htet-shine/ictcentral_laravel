@extends('layouts.shop')

@section('title', 'Home')

@section('content')
	
	<section class="slider">
		<div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
		  <ol class="carousel-indicators">
		    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
		    <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
		    <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
		  </ol>
		  <div class="carousel-inner">
		    <div class="carousel-item active">
		      <a href="">
		      	<img src="{{ asset('images/carousel1.jpg') }}" class="img-fluid d-none d-md-block w-100" alt="slide1">
		      </a>
		      <a href="">
		      	<img src="{{ asset('images/carousel1-m.jpg') }}" class="img-fluid d-md-none w-100" alt="slide1">
		      </a>
		    </div>
		    <div class="carousel-item">
		      <a href="">
		      	<img src="{{ asset('images/carousel2.jpg') }}" class="img-fluid d-none d-md-block w-100" alt="slide1">
		      </a>
		      <a href="">
		      	<img src="{{ asset('images/carousel2-m.jpg') }}" class="img-fluid d-md-none w-100" alt="slide1">
		      </a>
		    </div>
		    <div class="carousel-item">
		      <a href="">
		      	<img src="{{ asset('images/carousel3.jpg') }}" class="img-fluid d-none d-md-block w-100" alt="slide1">
		      </a>
		      <a href="">
		      	<img src="{{ asset('images/carousel3-m.jpg') }}" class="img-fluid d-md-none w-100" alt="slide1">
		      </a>
		    </div>
		  </div>
		  <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
		    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
		    <span class="sr-only">Previous</span>
		  </a>
		  <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
		    <span class="carousel-control-next-icon" aria-hidden="true"></span>
		    <span class="sr-only">Next</span>
		  </a>
		</div>
	</section>

	<section class="featured my-4">
		<div class="container">
			<div class="home-section-heading text-center">
				<h1>Featured Products</h1>
				<p>latest releases</p>
			</div>
			<div class="home-section-content mt-4">
				<div class="row">
					@foreach ($products as $product)
						<div class="col-md-6 col-lg-4">
							<div class="content-img">
								<a href="{{ url("products/$product->slug") }}">
									<img src="{{ asset('images/'.$product->slug.'.png') }}">
								</a>
							</div>
							<div class="content-body">
								<a href="{{ url("products/$product->slug") }}">
									<h1>{{ $product->name }}</h1>
								</a>
								<p>{{ $product->presentPrice() }}</p>
							</div>
						</div>
					@endforeach
				</div>
			</div>
		</div>
	</section>

@endsection