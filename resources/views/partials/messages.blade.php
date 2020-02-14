<div class="container my-4">
	@if (session('success_msg'))
		<div class="alert alert-success custom alert-dismissible fade show" role="alert">
		  {!! session('success_msg') !!}
		  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
		    <span aria-hidden="true">&times;</span>
		  </button>
		</div>
	@elseif(session('err_msg'))
		<div class="alert alert-danger custom alert-dismissible fade show" role="alert">
		  {!! session('err_msg') !!}
		  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
		    <span aria-hidden="true">&times;</span>
		  </button>
		</div>
	@endif

	@if ($errors->any())
		<div class="alert alert-danger custom alert-dismissible fade show" role="alert">
		  @foreach($errors->all() as $error)
		  	{{ $error }}
		  @endforeach
		  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
		    <span aria-hidden="true">&times;</span>
		  </button>
		</div>
	@endif
</div>

{{-- <div class="container">
	<div class="alert alert-success custom alert-dismissible fade show" role="alert">
	  Something has been added.
	  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
	    <span aria-hidden="true">&times;</span>
	  </button>
	</div>
</div> --}}