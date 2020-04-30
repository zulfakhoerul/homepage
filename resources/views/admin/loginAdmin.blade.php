<!DOCTYPE html>
<html>
 <head>
  <title>Login</title>
  <link rel="icon" href="../img/logopus.png">
 <!-- <link href="https://fonts.googleapis.com/css?family=Raleway" rel="stylesheet">-->
  <link rel="stylesheet" href="../style.css">
 
 
 </head>
 <body>
<!-- <nav class="navbar navbar-expand-lg navbar-light">
 <a class="btn_2 d-none d-lg-block" href="{{ url('login') }}">LOGIN</a>
 </nav>-->
 	<div id="card">
			<div id="card-content">
		<div id="card-title">
		<img src="../img/logopus2.png" alt="logo">
            <h2>LOGIN ADMIN</h2>
            
			<div class="underline-title"></div>
		</div>
		</div>
		@if(\Session::has('alert'))
                <div class="alert alert-danger">
                    <div>{{Session::get('alert')}}</div>
                </div>
            @endif
            @if(\Session::has('alert-success'))
                <div class="alert alert-success">
                    <div>{{Session::get('alert-success')}}</div>
                </div>
            @endif
		<form action="{{ url('/loginAdminPost') }}" method="post" class="form"> 
			{{ csrf_field() }}
					<label for="text" style="padding-top:13px">&nbsp;Username</label>
			<input
			id="text"
			class="form-content"
			type="username"
			name="username"
			autocomplete="on"
			required />
			<div class="form-border"></div>
			<label for="user-password" style="padding-top:22px">&nbsp;Password</label>
			<input
			id="user-password"
			class="form-content"
			type="password"
			name="password"
			required />
			<div class="form-border"></div>
            
			
            <input id="submit-btn" type="submit" name="submit" value="LOGIN" /><br>
            <!--<center>
                <a class="link" href="{{ url('/admin/registerAdmin') }}">Daftar</a>
            </center>-->
		</form>
	  </div>
 </body>
</html>