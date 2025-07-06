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

			<form method="POST" action="/encore/register" enctype="multipart/form-data"> 

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
					<input name="lastName" class="col-12" type="text" id="lastname" placeholder="Enter student middle name" maxlength="100" required>
				</div>

				<div class="form-group">
					<label for="email">Email:</label>
					<input name="email" type="email" id="email" class="col-12" placeholder="Enter student email" required maxlength="100">
				</div>

				<div class="form-group">
					<label for="programm">Program:</label>
					<input name="program" class="col-12" type="text" id="program" placeholder="Enter student program" required maxlength="100" list="courses">
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
			
				</div>

				<div class="form-group">
					<label for="phone">Your Phone:</label>
					<input  name="phone" class="col-12" type="tel" id="phone" placeholder="Enter student phone number" maxlength="15" required>
				</div>

				<div class="form-group">
					<label for="Guardian_Phone">Guardian Phone:</label>
					<input  name="guardianPhone" class="col-12" type="tel" id="Guardian_Phone" placeholder="Enter Guardian phone number" maxlength="15">
				</div>


				<div class="form-group">
					<label for="dob">Date of birth:</label>
					<input  name="dob" class="col-12" type="date" id="dob" required>
				</div>


				<div class="form-group">
					<label for="pob">Place of birth:</label>
					<select  name="pob" class="col-12" id="pob" required>
						<option value="Abia">Abia</option>
						<option value="Adamawa">Adamawa</option>
						<option value="Akwa Ibom">Akwa Ibom</option>
						<option value="Anambra">Anambra</option>
						<option value="Bauchi">Bauchi</option>
						<option value="Bayelsa">Bayelsa</option>
						<option value="Benue">Benue</option>
						<option value="Borno">Borno</option>
						<option value="Cross River">Cross River</option>
						<option value="Delta">Delta</option>
						<option value="Ebonyi">Ebonyi</option>
						<option value="Edo">Edo</option>
						<option value="Ekiti">Ekiti</option>
						<option value="Enugu">Enugu</option>
						<option value="Gombe">Gombe</option>
						<option value="Imo">Imo</option>
						<option value="Jigawa">Jigawa</option>
						<option value="Kaduna">Kaduna</option>
						<option value="Kano">Kano</option>
						<option value="Katsina">Katsina</option>
						<option value="Kebbi">Kebbi</option>
						<option value="Kogi">Kogi</option>
						<option value="Kwara">Kwara</option>
						<option value="Lagos">Lagos</option>
						<option value="Nasarawa">Nasarawa</option>
						<option value="Niger">Niger</option>
						<option value="Ogun">Ogun</option>
						<option value="Ondo">Ondo</option>
						<option value="Osun">Osun</option>
						<option value="Oyo">Oyo</option>
						<option value="Plateau">Plateau</option>
						<option value="Rivers">Rivers</option>
						<option value="Sokoto">Sokoto</option>
						<option value="Taraba">Taraba</option>
						<option value="Yobe">Yobe</option>
						<option value="Zamfara">Zamfara</option>
						<option value="FCT">FCT</option>
					</select>
				</div>


				<div class="form-group">
					<label for="educationalQualification">Educational Qualification :</label>
					<select name="educationalQualification" id="educationalQualification" class="col-12" required>
						<option value="PHD">PHD</option>
						<option value="Master">Masters</option>
						<option value="BSC">BSC</option>
						<option value="WAEC">WAEC</option>
						<option value="None">None</option>
					</select>
				</div>

				<div class="form-group">
					<label for="stateOfOrigin">State of origin :</label>
					<select name="stateOfOrigin" id="stateOfOrigin" class="col-12" required>
						<option value="Abia">Abia</option>
						<option value="Adamawa">Adamawa</option>
						<option value="Akwa Ibom">Akwa Ibom</option>
						<option value="Anambra">Anambra</option>
						<option value="Bauchi">Bauchi</option>
						<option value="Bayelsa">Bayelsa</option>
						<option value="Benue">Benue</option>
						<option value="Borno">Borno</option>
						<option value="Cross River">Cross River</option>
						<option value="Delta">Delta</option>
						<option value="Ebonyi">Ebonyi</option>
						<option value="Edo">Edo</option>
						<option value="Ekiti">Ekiti</option>
						<option value="Enugu">Enugu</option>
						<option value="Gombe">Gombe</option>
						<option value="Imo">Imo</option>
						<option value="Jigawa">Jigawa</option>
						<option value="Kaduna">Kaduna</option>
						<option value="Kano">Kano</option>
						<option value="Katsina">Katsina</option>
						<option value="Kebbi">Kebbi</option>
						<option value="Kogi">Kogi</option>
						<option value="Kwara">Kwara</option>
						<option value="Lagos">Lagos</option>
						<option value="Nasarawa">Nasarawa</option>
						<option value="Niger">Niger</option>
						<option value="Ogun">Ogun</option>
						<option value="Ondo">Ondo</option>
						<option value="Osun">Osun</option>
						<option value="Oyo">Oyo</option>
						<option value="Plateau">Plateau</option>
						<option value="Rivers">Rivers</option>
						<option value="Sokoto">Sokoto</option>
						<option value="Taraba">Taraba</option>
						<option value="Yobe">Yobe</option>
						<option value="Zamfara">Zamfara</option>
						<option value="FCT">FCT</option>
					
					</select>
				</div>

				<div class="form-group">
					<label for="gender">Gender :</label>
					<select name="gender" id="gender" class="col-12" required>
						<option value="male">Male</option>
						<option value="female">Female</option>
					</select>
				</div>

				<div class="form-group">
					<label for="lga">Local Government Area :</label>
					<input name="lga" class="col-12" type="text" id="lga" placeholder="Enter Local Government Area" required>
				</div>

				<div class="form-group">
					<label for="batch_no">Batch No:</label>
					<input name="batchNo" class="col-12" type="text" id="batch_no" placeholder="Enter student batch number" value="B">
				</div>

				<div class="form-group">
					<label for="reg_no">Registration No:</label>
					<input name="regNo" class="col-12" type="text" id="reg_no" placeholder="Enter student registration number" value="RE">
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