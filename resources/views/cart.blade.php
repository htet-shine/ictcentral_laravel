@extends('layouts.shop')

@section('title', 'Shopping Cart')

@section('content')

@include('partials.breadcrumb')
	
@include('partials.messages')

	<section class="cart mt-5 mb-3">
		<div class="container">
			<div class="product-section-heading cart-custom-heading">

			@if (Cart::count() > 0)
				<h1>{{ Cart::count() }} item(s) in Shopping Cart</h1>
			</div>
			<div class="row">
				<div class="col-lg-8">
					<div class="d-flex justify-content-end mb-3">
						<a href="{{ route('cart.empty') }}" class="button empty">Empty Cart</a>
					</div>
					<div class="row cart">
						@foreach (Cart::content() as $item)
							<div class="col-12">
								<div class="cart-container d-md-flex justify-content-between text-left">
									<img src="{{ asset('images/'.$item->model->slug.'.png') }}" alt="surface_b_1">
									<div class="cart-item-info">
										<a href="{{ route('products.show', $item->model->slug) }}">
											<p>{{ $item->model->name }}</p>
										</a>
										<p>{{ $item->model->details }} </p>
									</div>
									<select name="" class="quantity form-control-sm mb-3" data-id="{{ $item->rowId }}">

										@for ($i = 1; $i < 5+1; $i++)
											<option {{ $item->qty == $i ? 'selected' : '' }}>{{ $i }}</option>
										@endfor

									</select>
									<p>${{ number_format($item->subtotal) }}</p>
									<div class="cart-action mb-3">
										<form action="{{ route('cart.destroy', $item->rowId) }}" method="post">
											{{ csrf_field() }}	
											{{ method_field('DELETE') }}	
											<input type="hidden" name="productName" value="{{ $item->model->name }}">								
											<button type="submit" class="link delete"><i class="fas fa-trash-alt"></i></button>
										</form>
									</div>
								</div>
							</div>
						@endforeach
					</div>
					<div class="coupon mb-3">
						<p>Add your coupon code here...</p>
						<form action="#" class="d-flex">
							<input type="text" class="form-control form-control-sm mr-2">
							<button type="submit" class="btn btn-sm btn-dark">Add</button>
						</form>
					</div>
				</div>
				<div class="col-lg-4">
					<div class="cart-summary text-right">
						<h1 class="text-center">Cart Summary</h1>
						<div class="balance-info m-3">
							<p>Subtotal: <span>${{ Cart::subtotal() }}</span></p>
							<p>Tax (10%): <span>${{ Cart::tax() }}</span></p>
							<p>Total: <span>${{ Cart::total() }}</span></p>
							<a class="button" href="{{ url('products') }}">Continue Shopping</a>
							<a href="{{ route('checkout.index') }}" class="button btn-checkout">Checkout</a>
						</div>
					</div>
				</div>
			</div>
		</div>
		@else
			<section class="info my-5">
				<div class="info-container">
					<h1>There are no items in shopping cart.</h1>
					<p><a href="{{ url('products') }}">Click here</a> shop products.</p>
				</div>
			</section>
		@endif
	</section>

@include('partials.related')

@endsection

@section('extra-js')

	

	<script>

		(function () {
			const classname = document.querySelectorAll('.quantity')
			Array.from(classname).forEach(function (element) {
				element.addEventListener('change', function () {
					// alert('changed');
					const id = element.getAttribute('data-id')
					axios.patch(`/cart/${id}`, {
					    quantity: this.value

					  })
					  .then(function (response) {
					    console.log(response);
					    window.location.href = '{{ route('cart.index') }}'
					  })
					  .catch(function (error) {
					    console.log(error);
					    window.location.href = '{{ route('cart.index') }}'
					  });
				});
			});
		})();

	</script>
@endsection