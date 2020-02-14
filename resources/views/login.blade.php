@extends('layouts.shopfullscreen')

@section('title', 'Login')

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
					<input type="text" class="form-control custom" placeholder="email..." required="">
				</div>
				<div class="form-group">
					<input type="text" class="form-control custom" placeholder="password..." required="">
				</div>
				<div class="d-flex align-items-center mt-4">
					<div class="flex-grow-1">
						<a href="{{ url('register') }}">Don't have an account? Sign Up</a><br>
						<a href="#">Forgot Passowrd?</a>
					</div>
					<button class="button">Login</button>
				</div>
			</form>
		</div>
	</div>

@endsection