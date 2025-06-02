<x-layout>
    <link rel="stylesheet" href="/css/nav_logo.css">
    <link rel="stylesheet" href="/css/landing.css">


	{{-- @vite('resources/css/nav_logo.css')
	@vite('resources/css/landing.css') --}}

	<div class="search_wrapper">
		<div class="search_container col-6 col-ld-9 col-esd-11">
			
			<form action="" id="searchForm" method="GET" class="search_container col-12">

				@csrf
				<input class="search_bar col-10 col-ld-9 col-esd-10" type="text" name="search_string" placeholder="Student Details" autocomplete="off">
				{{-- <a href="/encore/profile" id="submit" class="col-2 col-ld-3 col-esd-2">GO</a> --}}

				<button id="submit" class="col-2 col-ld-3 col-esd-2">GO</button>
			</form>
			
		</div>

		<div class="search_result" >here</div>
	</div>

	{{-- @vite('resources/js/liveSearch.js') --}}

	<script src="/js/liveSearch.js"></script>

</x-layout>