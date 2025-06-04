<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<html>
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="icon" type="image/png" href="/images/niit/niit-logo.png">
		<title></title>
		<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

		{{-- <link rel="stylesheet" href="{{ asset('build/assets/app-BVsMBSNy.css') }}"> --}}
		@vite('resources/css/nav_logo.css')
		@vite('resources/css/landing.css')

	</head>
	<body>

		<div class="nav">
			<div class="logo_hold">
				<a href="/encore"><img src="{{ asset("images/niit-logo.png") }}" class="logo"></a>
			</div>

			<div class="encor">
				ENCORE RESULTS
			</div>

			<div class="register">
				<a href="{{ route('encore.viewRegistration') }}">Register Student</a>
			</div>
		</div>
        
        {{$slot}}
    </body>

</html>