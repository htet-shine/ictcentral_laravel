<section class="related-product">
	<div class="container">
		<h1 class="mb-4">You may also like...</h1>
		<div class="row">

			@foreach ($relatedproducts as $relatedproduct)
				<div class="col-6 col-md-4 col-lg-3 mb-3 mb-lg-0">
					<a href="{{ url("products/$relatedproduct->slug") }}">
						<img src="{{ asset('images/'.$relatedproduct->slug.'.png') }}" alt="">
						<h1>{{ $relatedproduct->name }}</h1>
					</a>
				</div>
			@endforeach

		</div>
	</div>
</section>