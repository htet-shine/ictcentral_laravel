<div class="breadcrumb-container">
	<nav class="container" aria-label="breadcrumb">
	  <ol class="breadcrumb">
	    <li class="breadcrumb-item">
	    	<a href="{{ url('/products') }}">Products</a>
	    </li>
	    <li class="breadcrumb-item active" aria-current="page">Shopping Cart</li>
	    @if (Cart::count() > 0)
    	  <li class="breadcrumb-item active" aria-current="page">
    	  	Checkout
    		</li>
	    @endif
	  </ol>
	</nav>
</div>