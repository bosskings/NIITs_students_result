<x-layout>
    <link rel="stylesheet" href="/css/nav_logo.css">
    <link rel="stylesheet" href="/css/reg.css">

	{{-- @vite('resources/css/reg.css')
	@vite('resources/css/nav_logo.css') --}}



	<div class="form-wrapper">

		<div class="form-container col-4 col-esd-11">
			<h2>Student Registration Form</h2>

			@if (session('success'))
				<div style="text-align: center; color:green">
					{{ session('success') }}
				</div>
			@endif

			@if (session('error'))
				<div style="text-align: center; color:red">
					{{ session('error') }}
				</div>
			@endif

			<form method="POST" action="/encore/register"> 

				@csrf

				<div class="form-group">
					<label for="firstname">First Name:</label>
					<input name="firstName" class="col-12" type="text" id="firstname" placeholder="Enter student full name" required maxlength="100">
				</div>

				<div class="form-group">
					<label for="middlename">Middle Name:</label>
					<input name="middleName" class="col-12" type="text" id="middlename" placeholder="Enter student middle name" maxlength="100">
				</div>


				<div class="form-group">
					<label for="lastname">Last Name:</label>
					<input name="lastName" class="col-12" type="text" id="lastname" placeholder="Enter student middle name" maxlength="100">
				</div>

				<div class="form-group">
					<label for="email">Email:</label>
					<input name="email" type="email" id="email" class="col-12" placeholder="Enter student email" required maxlength="100">
				</div>

				<div class="form-group">
					<label for="programm">Program:</label>
					<input name="program" class="col-12" type="text" id="program" placeholder="Enter student program" required maxlength="100" list="courses">
					<datalist id="courses">
						<option value="Web Developement">
						<option value="Web Design">
						<option value="Data Analysis">
						<option value="Digital Marketing">
						<option value="Cyber Security">
						<option value="Software Engineering(MMS)">
						<option value="MicroSoft Office">
						<option value="Mangement information Science (MIS)">
						<option value="Projec management (PMP)">
						<option value="Multi-Media">
						<option value="Java Diploma">
						<option value="Python Diploma">
						<option value="UI/UX">
						<option value="Hardware and NetWorking">
						<option value="Mobile App developement on Adndroid">
					
					</datalist>		
			
				</div>

				<div class="form-group">
					<label for="phone">Phone:</label>
					<input  name="phone" class="col-12" type="tel" id="phone" placeholder="Enter student phone number" required maxlength="15">
				</div>

				<div class="form-group">
					<label for="batch_no">Batch No:</label>
					<input name="batchNo" class="col-12" type="text" id="batch_no" placeholder="Enter student batch number" required>
				</div>

				<div class="form-group">
					<label for="reg_no">Registration No:</label>
					<input name="regNo" class="col-12" type="text" id="reg_no" placeholder="Enter student registration number" required>
				</div>

				<div class="form-group">
					<button name="submit" type="submit" id="submit" class="col-12">Submit</button>
				</div>
			</form>
		</div>

	</div>

	<script src="/js/validate.js"></script>

	{{-- @vite('resources/js/validate.js') --}}

</x-layout>