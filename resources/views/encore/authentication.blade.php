<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Authentication</title>
  
    {{-- FONT AWESOME --}}
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <!-- CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">


  @vite('resources/css/auth.css')

  {{-- <link rel="stylesheet" href="{{ asset('build/assets/app-BVsMBSNy.css') }}"> --}}

</head> 
<body>
  <div class="body">
 
    <!-- <img src="Images/NIIT BACKGROUND 6.png" class="col-12"> -->
    <div class="glass ">
    <a href="index.html"><p> <i class="fa fa-arrow-left"></i> Back </p></a>
    
    @if (session('error'))
      <div style="color:red">{{ session('error') }}</div>
    @endif


    {{-- @if(Auth::check())
      <p>You are logged in as {{ Auth::user()->email }}</p>
    @else 
      <p>Logged out {{Auth::check()}} </p>
    @endif --}}


		<form action="{{ route('login.auth') }}  " method="POST">
            @csrf

        <input type="text" name="user_id" placeholder="Login Id">
        <input type="password" name="password" placeholder="********">
        <button id="sub">Login</button>
		  
		</form>

	</div>

  </div>

</body>

</html>