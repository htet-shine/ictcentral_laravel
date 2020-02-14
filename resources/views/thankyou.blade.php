@extends('layouts.shop')

@section('title', 'Thank You')

@section('content')

@include('partials.messages')
	
	<section class="info my-5">
		<div class="info-container">
			<h1>THANK YOU for ordering from us.</h1>
			<p>Your item(s) will be delivered within 3 days.</p>
			<p><a href="{{ url('/') }}">Click here</a> for more information about delivery.</p>
		</div>
	</section>

{{-- @include('partials.related') --}}

@endsection