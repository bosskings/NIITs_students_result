<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>Profile</title>
		<link rel="stylesheet" href="font-awesome/css/font-awesome.min.css">

		@vite('resources/css/nav_logo.css')
		@vite('resources/css/students_d.css')


	</head>
	<body>

		<div class="nav">
			<div class="logo_hold">
				<a href="/encore"><img src="assets/imgs/niit-logo.png" class="logo"></a>
			</div>

			<div class="encor">
				ENCORE RESULTS
			</div>

			<div class="register">
				<a href="/encore/register">Register Student</a>
			</div>

		</div>

		<section class="stdent_data col-8 col-ld-9 col-esd-12">

			<div class="left_img_name col-5 col-ld-10 col-esd-12">
				<div id="profile_photo" class="col-8">
					<img src="assets/imgs/Luther_passport.jpg" alt="Student Profile Photo">
				</div>
				<h1 class="student_name col-md-12">Chinda Luther Nkem</h1>
			</div>

			<div class="right_details col-7 col-md-10 col-esd-12">

					<h2>Contact Info</h2>
				<div class="details">
					<div class="email col-6 col-md-12 col-esd-12">
						<span class="fa fa-envelope-o icons" aria-hidden="true"></span>
						<p>luthernkem@gmail.com</p>
					</div>

					<div class="program col-6 col-md-12 col-esd-12">
						<span class="fa fa-university icons" aria-hidden="true"></span>
						<p>Web Development</p>
					</div>

					<div class="phone col-6 col-md-12 col-esd-12">
						<span class="fa fa-phone icons" aria-hidden="true"></span>
						<p>(+234) 9065583104</p>
					</div>

					<div class="batch_no col-6 col-md-12 col-esd-12">
						<span class="icons">Batch No.:</span>
						<p>B250077</p>
					</div>

					<div class="reg_no col-6 col-md-12 col-esd-12">
						<span class="icons">Reg. No.:</span>
						<p>R253005500164</p>
					</div>
				</div>

				<div class="send_score">
					<textarea placeholder="Enter Score" class="col-12" id="student_score"></textarea>
					<div class="send">					
						<button id="sendbtn">Send</button>
					</div>
				</div>

			</div>

		</section>

	<script src="js/result.js" type="text/javascript"></script>
	</body>
</html>