<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>

	<link rel="stylesheet" href="font-awesome/css/font-awesome.min.css">

		@vite('resources/css/nav_logo.css')
		@vite('resources/css/reg.css')

</head>
<body>

	<div class="nav col-12">
		<div class="logo col-1">
			<div class="logo_hold">
				<a href="/"><img src="{{ asset('images/niit-logo.png') }}" class="logo"></a>
			</div>
		</div>

		<div class="encor">
			ENCORE RESULTS
		</div>

		<div class="register">
			<a href="/register">Register Student</a>
		</div>
	</div>

	<div class="form-wrapper">

		<div class="form-container col-4 .col-esd-11">
	    <h2>Student Registration Form</h2>

	    <form>
	      <div class="form-group">
	        <label for="fullname">Full Name:</label>
	        <input class="col-12" type="text" id="fullname" placeholder="Enter student full name" required maxlength="100">
	      </div>

	      <div class="form-group">
	        <label for="email">Email:</label>
	        <input class="col-12" type="email" id="email" placeholder="Enter student email" required maxlength="100">
	      </div>

	      <div class="form-group">
	        <label for="program">Program:</label>
	        <input class="col-12" type="text" id="program" placeholder="Enter student program" required maxlength="100">
	      </div>

	      <div class="form-group">
	        <label for="phone">Phone:</label>
	        <input class="col-12" type="tel" id="phone" placeholder="Enter student phone number" required maxlength="15">
	      </div>

	      <div class="form-group">
	        <label for="batch_no">Batch No:</label>
	        <input class="col-12" type="text" id="batch_no" placeholder="Enter student batch number" required>
	      </div>

	      <div class="form-group">
	        <label for="reg_no">Registration No:</label>
	        <input class="col-12" type="text" id="reg_no" placeholder="Enter student registration number" required>
	      </div>

	      <div class="form-group">
	        <button type="submit" id="submit" class="col-12">Submit</button>
	      </div>
	    </form>
	  </div>

	</div>


</body>
<script type="text/javascript" src="js/validate.js"></script>
</html>