<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Authentication</title>
  {{-- <link rel="stylesheet" href="Assets/bootstrap-5.3.2-dist/css/bootstrap.css"> --}}
  {{-- <link rel="stylesheet" href="CSS/dasboard.css"> --}}
  {{-- <link rel="stylesheet" href="CSS/nav-foot.css"> --}}
  {{-- <link rel="stylesheet" media="screen and (max-width: 1200px)" href="CSS/mobile.css" /> --}}
    
    {{-- FONT AWESOME --}}
  <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <!-- CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">


  @vite('resources/css/auth.css')

</head>
<body>
  <div class="body">
	<!-- <img src="Images/NIIT BACKGROUND 6.png" class="col-12"> -->
	<div class="glass ">
	<a href="index.html"><p> <i class="fa fa-arrow-left"></i> Back </p></a>
  
  @if (session('error'))
    <div style="color:red">{{ session('error') }}</div>
  @endif


  {{
    session()->get('logged_in');
  }}
		<form action="{{ route('encore.authenticate') }}  " method="POST">
            @csrf

		  	<input type="text" name="user_id" placeholder="Login Id">
			<input type="password" name="password" placeholder="********">
			<button id="sub">Login</button>
		  
		</form>

	</div>

  </div>

</body>

</html>