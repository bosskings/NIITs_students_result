<x-layout>
    <link rel="stylesheet" href="/css/nav_logo.css">
    <link rel="stylesheet" href="/css/student_d.css">


	{{-- @vite('resources/css/student_d.css')
	@vite('resources/css/nav_logo.css') --}}


	<section class="stdent_data col-8 col-ld-9 col-esd-12">
		
		<div class="left_img_name col-5 col-ld-10 col-esd-12">
			<div id="profile_photo" class="col-8">
				<img src="{{ asset($student->passport) }}" alt="Student Profile Photo">
			</div>
			<h1 class="student_name col-md-12">{{ $student->first_name.' '.$student->middle_name.' '.$student->last_name }}</h1>
			{{-- <p> {{ $student }} </p> --}}
		</div>

		<div class="right_details col-7 col-md-10 col-esd-12">

				<h2>Contact Info</h2>
			<div class="details">
				<div class="email col-6 col-md-12 col-esd-12">
					<span class="fa fa-envelope-o icons" aria-hidden="true">Email</span>
					<p>{{ $student->email}}</p>
				</div>

				<div class="program col-6 col-md-12 col-esd-12">
					<span class="fa fa-university icons" aria-hidden="true">Course:</span>
					<p>{{ $student->course}}</p>
				</div>

				<div class="phone col-6 col-md-12 col-esd-12">
					<span class="fa fa-phone icons" aria-hidden="true">Phone:</span>
					<p>{{ $student->phone }}</p>
				</div>

				<div class="batch_no col-6 col-md-12 col-esd-12">
					<span class="icons">Batch No.:</span>
					<p>{{ $student->batch_no}}</p>
				</div>

				<div class="reg_no col-6 col-md-12 col-esd-12">
					<span class="icons">Reg. No.:</span>
					<p>{{ $student->reg_no }}</p>
				</div>
			</div>

			<div class="send_score">
				
				<form action="{{ route('encore.sendStudentsEmail') }}" method="POST">
					
					@csrf

					<textarea placeholder="Exam Module" name="module" class="col-10 col-md-12 col-esd-12" id="student_score" style="height: 100px"></textarea>
					<textarea placeholder="Students score" name="score" class="col-10 col-md-12 col-esd-12" id="student_score" style="height: 50px"></textarea>
					<div class="send">					
						<button id="sendbtn">Send</button>
					</div>
				
				</form>

			</div>
			
		</div>
		
	</section>
	

	<script src="/js/result.js"></script>

	{{-- @vite('resources/js/result.js') --}}

</x-layout>