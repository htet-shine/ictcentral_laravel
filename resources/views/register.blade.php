@extends('layouts.shopfullscreen')

@section('title', 'Register')

@section('content')

	<div class="form-container">
		<div class="auth-form">
			<div class="auth-heading">
				<a href="{{ url('home') }}">
					<img src="images/logo-b.png" alt="">
					<h1>ICT Central</h1>
				</a>
			</div>
			<form action="#">
				<div class="form-group">
					<label>Name</label>
					<input type="text" class="form-control custom" placeholder="name..." required="">
				</div>
				<div class="form-group">
					<label>Email</label>
					<input type="text" class="form-control custom" placeholder="email address..." required="">
				</div>
				<div class="form-group">
					<label>Phone</label>
					<input type="text" class="form-control custom" placeholder="example (0912345678)" required="">
				</div>
				<div class="form-group">
					<label>Password</label>
					<input type="text" class="form-control custom" placeholder="password" required="">
				</div>
				<div class="d-flex align-items-center">
					<a href="{{ url('login') }}" class="flex-grow-1">Have an account? Click to Login</a>
					<button class="button">Sign Up</button>
				</div>
			</form>
		</div>
	</div>

@endsection