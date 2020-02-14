@extends('layouts.shop')

@section('title', 'Products')

@section('content')

	<section class="products my-4">
		<div class="container">
			<div class="row">
				<div class="col-lg-3 filters-container">
					<div class="filters">
						<h1 id = "filters-toggle" class="d-flex justify-content-between">Filters 
							<i class="fal fa-caret-right my-auto"></i></h1>
						<div class="filters-single">
							<h1>Categories</h1>
								@foreach ($categories as $category)
									<a href="{{ route('products.index', ['category' => $category->slug]) }}">{{ $category->name }}</a>
								@endforeach		
						</div>
						<div class="filters-single mt-3">
							<h1>Brands</h1>		
							<a href="#">Asus</a>
							<a href="#">Microsoft</a>
							<a href="#">Dell</a>
							<a href="#">MSI</a>
						</div>
					</div>
				</div>
				<div class="col-lg-9 pl-lg-5">
					<div class="d-flex justify-content-between product-section-heading">
						<h1>{{ $categoryName }}</h1>
						@if (request()->category)
							<div class="product-sorting my-auto">
								<b>Price:</b>
								<a href="{{ route('products.index', ['category' => request()->category, 'sort' => 'high_low']) }}">High to Low</a>
								<b>|</b>
								<a href="{{ route('products.index', ['category' => request()->category, 'sort' => 'low_high']) }}">Low to High</a> 
							</div>
						@endif
					</div>
					<div class="row">

						@if ($products->count() > 0)
							@foreach ($products as $product)
								<div class="columns col-md-6 col-lg-4">
									<div class="product-box">
										<div class="content-img">
											<a href="{{ url("products/$product->slug") }}">
												<img src="{{ asset('images/'.$product->slug.'.png') }}">
											</a>
										</div>
										<div class="content-body">
											<a href="{{ url("products/$product->slug") }}">
												<h1>{{ $product->name }}</h1>
											</a>
											<p>{{ $product->details }}</p>
											<p>{{ $product->presentPrice() }}</p>
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
								</div>
							@endforeach
						@else
							<div class="not-found">
								<h3>No Products Found!</h3>	
							</div>
						@endif

					</div>

					<div class="pagination-container">
						{{-- {{ $products->links('vendor.pagination.custom-pagination') }} --}}
						
						{{-- extend existing query with page number --}}
						{{ $products->appends(request()->input())->links('vendor.pagination.custom-pagination') }}
					</div>

				</div>
			</div>
		</div>
	</section>

@endsection

