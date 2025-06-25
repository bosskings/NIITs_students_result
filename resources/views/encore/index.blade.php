<x-layout>
    <link rel="stylesheet" href="/css/nav_logo.css">
    <link rel="stylesheet" href="/css/landing.css">


	{{-- @vite('resources/css/nav_logo.css')
	@vite('resources/css/landing.css') --}}

	<div class="search_wrapper">
		<div class="search_container col-6 col-ld-9 col-esd-11">
			
			<form action="/encore/showStudentsDetail" id="searchForm" method="POST" class="search_container col-12">

				@csrf
				<input list="courses" class="search_bar col-10 col-ld-9 col-esd-10" type="text" name="search_string" placeholder="Student Details" autocomplete="off">
				<datalist id="courses">
					<option value="Web Development">
					<option value="Web Design">
					<option value="Data Analysis">
					<option value="Digital Marketing">
					<option value="Cyber Security">
					<option value="Software Engineering(MMS)">
					<option value="MicroSoft Office">
					<option value="Management information Science (MIS)">
					<option value="Project management (PMP)">
					<option value="Multi-Media">
					<option value="Java Diploma">
					<option value="Python Diploma">
					<option value="UI/UX">
					<option value="Hardware and NetWorking">
					<option value="Mobile App development on Android">
				</datalist>	

				<button id="submit" class="col-2 col-ld-3 col-esd-2">GO</button>
			</form>
			
		</div>

		<div class="search_result" > </div>
	</div>

	{{-- @vite('resources/js/liveSearch.js') --}}

	<script src="/js/liveSearch.js"></script>

</x-layout>