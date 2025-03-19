<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<html>
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title></title>
		{{-- <link rel="stylesheet" type="text/css" href="css/landing.css">
		<link rel="stylesheet" type="text/css" href="css/nav_logo.css"> --}}

		@vite('resources/css/landing.css')
		@vite('resources/css/nav_logo.css')
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
				<a href="register">Register Student</a>
			</div>
		</div>

		<div class="search_wrapper">
			<div class="search_container col-6 col-ld-9 col-esd-11">

				<input class="search_bar col-10 col-ld-9 col-esd-10" type="text" name="search" placeholder="Student REG.NO">
				<a href="/encore/profile" id="submit" class="col-2 col-ld-3 col-esd-2">GO</a>
				
			</div>
			<!-- <h1>Search for student re</h1> -->
		</div>


	</body>
</html>