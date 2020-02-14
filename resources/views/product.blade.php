@extends('layouts.shop')

@section('title', $product->name)

@section('content')
	
	<section class="product-single my-4">
		<div class="container">
			<div class="product-single-container">
				<div class="row">
					<div class="col-md-6">
						<img src="{{ asset('images/'.$product->slug.'.png') }}" alt="surface_b_1">
					</div>
					<div class="aa col-md-6">
						<h1>{{ $product->name }}</h1>
						<p class="price">{{ $product->presentPrice() }}</p>
						{{-- <p>Processor: Intel Core i7 9th Gen</p>
						<p>Ram: 8GB</p>
						<p>Storage: 512GB SSD</p> --}}
						<p>{{ $product->details }}</p>
						<p class="text-justify">
						{{ $product->description }}
						</p>
						<div class="text-left">
							<form action="{{ url('/cart') }}" method="post">
								{{ csrf_field() }}
								<input type="hidden" name="productID" value="{{ $product->id }}">
								<input type="hidden" name="productName" value="{{ $product->name }}">
								<input type="hidden" name="productPrice" value="{{ $product->price }}">
								<button type="submit" class="button">Add to Cart</button>
							</form>
						</div>
					</div>
				</div>
				<ul class="tab-menu d-flex mt-5">
					<li class="tab-link active" data-tab="gallery">Gallery</li>
					<li class="tab-link" data-tab="spec">Specifications</li>
				</ul>
				<div id="gallery" class="tab-content text-center active">
					<div class="row">
						<div class="col-md-6">
							<img src="{{ asset('images/'.$product->slug.'.png') }}" alt="surface2">
						</div>
						<div class="col-md-6">
							<img src="{{ asset('images/'.$product->slug.'.png') }}" alt="surface3">
						</div>
					</div>
				</div>
				<div id="spec" class="tab-content ">
					<p>Ram: 16GB</p>
					<p>Processor: Core i7</p>
					<p>Storage: 512GB SSD</p>
					<p>Graphic: Intel Iris</p>
					<p>Battery Life: 8-Hours Normal Usage</p>
				</div>
			</div>
		</div>
	</section>

@include('partials.related')

@endsection