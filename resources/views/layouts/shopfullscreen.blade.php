<!DOCTYPE html>
<html lang="en">
  <head>
	  <meta charset="utf-8">
	  <meta http-equiv="x-ua-compatible" content="ie=edge">
	  <meta name="viewport" content="width=device-width, initial-scale=1">
	  {{-- Fonts --}}
	  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto&display=swap">
	  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Oswald&display=swap">
		{{-- Styles --}}
	  {{-- <link href="{{ asset('css/app.css') }}" rel="stylesheet" > --}}
	  <link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet" >
	  <link href="{{ asset('css/all.min.css') }}" rel="stylesheet" >
	  <link href="{{ asset('css/main.css') }}" rel="stylesheet">
		{{-- Scripts --}}
		{{-- <script src="{{ asset('js/app.js') }}"></script> --}}
		<script src="{{ asset('js/jquery.min.js') }}"></script>
		<script src="{{ asset('js/bootstrap.min.js') }}"></script>
		<script src="{{ asset('js/main.js') }}"></script>
	  <title>@yield('title') - {{ config('app.name') }}</title>
</head>
<body>
	
	<main>
		@yield('content')
	</main>

</body>
</html>