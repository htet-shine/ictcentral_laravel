@extends('layouts.shop')

@section('title', 'Checkout')

<script src="https://js.stripe.com/v3/"></script>

@section('content')

@include('partials.messages')

	<section class="checkout my-5">
		<div class="container">
			<div class="product-section-heading cart-custom-heading">
				<h1>Checkout</h1>
			</div>
			<div class="row">
				<div class="col-lg-6">
					<form action="{{ route('checkout.store') }}" id="payment-form" method="post">
						{{ csrf_field() }}
						<div class="form-group">
							<label>Name</label>
							<input type="text" class="form-control custom" placeholder="name..."
							name="name" id="name" value="{{ old('name') }}" required>
						</div>
						<div class="form-group">
							<label>Email</label>
							<input type="email" class="form-control custom" placeholder="email address..."
							name="email" id="email" value="{{ old('email') }}" required>
						</div>
						<div class="form-group">
							<label>Phone</label>
							<input type="phone" class="form-control custom" placeholder="phone number..."
							name="phone" id="phone" value="{{ old('phone') }}" required>
						</div>
						<div class="form-group">
							<label>Street Address</label>
							<textarea cols="30" rows="3" class="form-control custom" placeholder="detail address..."
							name="address" id="address" value="{{ old('address') }}" required></textarea>
						</div>
						<div class="row">
							<div class="col-6">
								<div class="form-group">
									<label>City</label>
									<select class="form-control custom" name="city" id="city"
									value="{{ old('city') }}" required>
										<option value="1">Yangon</option>
										<option value="2">Bago</option>
										<option value="3">Mandalay</option>
									</select>
								</div>
							</div>
							<div class="col-6">
								<div class="form-group">
									<label>State</label>
									<select class="form-control custom" name="division" id="division"
									value="{{ old('division') }}" required>
										<option value="1">Yangon</option>
										<option value="2">Bago</option>
										<option value="3">Mandalay</option>
									</select>
								</div>
							</div>
						</div>
						<div class="row">
							<div class="col-6">
								<div class="form-group">
									<label>Postal Code</label>
									<input type="text" class="form-control custom" placeholder="11211"
									name="postal_code" id="postal_code"
									value="{{ old('postal_code') }}" required>
								</div>
							</div>
						</div>
						<h5 class="mt-4 mb-3">Payment Infomation</h5>
						<div class="form-group">
							<label>Name on your credit/debit card</label>
							<input type="text" class="form-control custom" placeholder="Name on your card"
							name="name_on_card" id="name_on_card"
							value="{{ old('name_on_card') }}" required>
						</div>
						
						<div class="form-group">
							<label for="card-element">
					      Credit or debit card
					    </label>
					    <div id="card-element">
					      <!-- A Stripe Element will be inserted here. -->
					    </div>

					    <!-- Used to display form errors. -->
					    <div id="card-errors" role="alert"></div>
						</div>

						<button type="submit" class="button btn-checkout w-100" id="complete-order">Confirm Order</button>
					</form>
				</div>
				<div class="col-lg-6 mt-5 mt-lg-0">
					<div class="order-summary">
						<h1>Order Summary</h1>

						@foreach (Cart::content() as $item)
							<div class="order-container d-flex justify-content-between text-left">
								<img src="{{ asset('images/'.$item->model->slug.'.png') }}" alt="surface_b_1">
								<div class="order-item-info">
									<p>{{ $item->model->name }}</p>
									<p>{{ $item->model->details }} </p>
								</div>
								<p class="order-qty">${{ number_format($item->subtotal) }}</p>
								<p class="order-qty">{{ $item->qty }}</p>
							</div>
						@endforeach
		
					</div>
					<div class="balance-info order">
						<p>Subtotal: <span>${{ Cart::subtotal() }}</span></p>
						<p>Tax (10%): <span>${{ Cart::tax() }}</span></p>
						<p>Total: <span>${{ Cart::total() }}</span></p>
					</div>
				</div>
			</div>
		</div>
	</section>

{{-- @include('.partials.related') --}}

@endsection

@section('extra-js')
{{-- 	<script>
		const city = document.getElementById('city')
		const state = document.getElementById('division')

		city.addEventListener('change', function () {
			console.log(this.options[this.selectedIndex].text)
		});

		state.addEventListener('change', function () {
			console.log(this.options[this.selectedIndex].text)
		});

	</script> --}}
	<script>
		(function(){
			// Create a Stripe client.
			var stripe = Stripe('pk_test_DPmbm244F5tWhmhjOmxkt5bR00RZX5JfTy');

			// Create an instance of Elements.
			var elements = stripe.elements();

			// Custom styling can be passed to options when creating an Element.
			// (Note that this demo uses a wider set of styles than the guide below.)
			var style = {
			  base: {
			    color: '#32325d',
			    fontFamily: '"Roboto", "Helvetica Neue", Helvetica, sans-serif',
			    fontSmoothing: 'antialiased',
			    fontSize: '16px',
			    '::placeholder': {
			      color: '#aab7c4'
			    }
			  },
			  invalid: {
			    color: '#fa755a',
			    iconColor: '#fa755a'
			  }
			};

			// Create an instance of the card Element.
			var card = elements.create('card', {
				style: style,
				hidePostalCode: true,
			});

			// Add an instance of the card Element into the `card-element` <div>.
			card.mount('#card-element');

			// Handle real-time validation errors from the card Element.
			card.addEventListener('change', function(event) {
			  var displayError = document.getElementById('card-errors');
			  if (event.error) {
			    displayError.textContent = event.error.message;
			  } else {
			    displayError.textContent = '';
			  }
			});

			// Handle form submission.
			var form = document.getElementById('payment-form');
			form.addEventListener('submit', function(event) {
			  event.preventDefault();

			// Disable submit button after 1 click to prevent duplicate orders
			document.getElementById('complete-order').disabled = true;

				// Get City and State name instead of values
				var city_id = document.getElementById('city');
				var city = city_id.options[city_id.selectedIndex].text;
				var state_id = document.getElementById('division');
				var state = state_id.options[state_id.selectedIndex].text;

			  var options = {
			  	name: document.getElementById('name_on_card').value,
			  	address_line1: document.getElementById('address').value,
			  	address_city: city,
			  	address_state: state,
			  	address_zip: document.getElementById('postal_code').value
			  }

			  console.log(options)


			  stripe.createToken(card, options).then(function(result) {
			    if (result.error) {
			      // Inform the user if there was an error.
			      var errorElement = document.getElementById('card-errors');
			      errorElement.textContent = result.error.message;

			      // Enable submit button after error occurs
			      document.getElementById('complete-order').disabled = false;
			    } else {
			      // Send the token to your server.
			      stripeTokenHandler(result.token);
			    }
			  });
			});

			// Submit the form with the token ID.
			function stripeTokenHandler(token) {
			  // Insert the token ID into the form so it gets submitted to the server
			  var form = document.getElementById('payment-form');
			  var hiddenInput = document.createElement('input');
			  hiddenInput.setAttribute('type', 'hidden');
			  hiddenInput.setAttribute('name', 'stripeToken');
			  hiddenInput.setAttribute('value', token.id);
			  form.appendChild(hiddenInput);

			  // Submit the form
			  form.submit();
			}
		})();
	</script>
	
@endsection