@extends('layouts.shop')

@section('title', 'Contact Us')

@section('content')
	
	<div class="about-heading img-fluid">
		<div class="container">
			<h1>Contact Us</h1>
		</div>
	</div>

	<section class="contact my-5">
		<div class="container">
			<div class="row">
				<div class="col-md-6 mb-5 mb-md-0">
					<form action="#">
						<div class="form-group">
							<label>Name</label>
							<input type="text" class="form-control" placeholder="your name..." required/>
						</div>
						<div class="form-group">
							<label>Email</label>
							<input type="email" class="form-control" placeholder="your email..." required/>
						</div>
						<div class="form-group">
							<label>Message</label>
							<textarea cols="30" rows="10" class="form-control" placeholder="your message..."></textarea>
						</div>
						<button class="btn btn-dark">Submit</button>
					</form>
				</div>
				<div class="col-md-6">
					<h4>You might find your answer in FAQs</h4>
					<ul class="default-list ml-4">
						<li>Why do we use it?</li>
						<li>Where does it come from?</li>
						<li>Where can I get some?</li>
					</ul>
				</div>
			</div>
		</div>
	</section>

@endsection