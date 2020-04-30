<!DOCTYPE html>
<html>
 <head>
  <title>Login</title>
  <link rel="icon" href="img/logo4.png">
 <!-- <link href="https://fonts.googleapis.com/css?family=Raleway" rel="stylesheet">-->
  <link rel="stylesheet" href="../style.css">
 
 
 </head>
 <body>
<!-- <nav class="navbar navbar-expand-lg navbar-light">
 <a class="btn_2 d-none d-lg-block" href="{{ url('login') }}">LOGIN</a>
 </nav>-->
 	<div id="card1">
			<div id="card-content">
		<div id="card-title">
            <h2>LOGIN</h2>
            <h3>Admin</h3>
			<div class="underline-title"></div>
		</div>
		</div>
		@if ($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
                @endif
		<form action="{{ url('/registerAdminPost') }}" method="post" class="form"> 
			{{ csrf_field() }}
					<label for="text" style="padding-top:13px">&nbsp;Nama</label>
			<input
			id="text"
			class="form-content"
			type="nama_admin"
			name="nama_admin"
			autocomplete="on"
			required />
            <div class="form-border"></div>
            <label for="text" style="padding-top:13px">&nbsp;Username</label>
			<input
			id="text"
			class="form-content"
			type="username"
			name="username"
			autocomplete="on"
			required />
			<div class="form-border"></div>
            <label for="text" style="padding-top:13px">&nbsp;Email</label>
			<input
			id="text"
			class="form-content"
			type="email"
			name="email"
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
            <label for="user-password" style="padding-top:22px">&nbsp;Password Confirmation</label>
			<input
			id="confirmation"
			class="form-content"
			type="password"
			name="confirmation"
			required />
			<div class="form-border"></div>
            
			
            <input id="submit-btn" type="submit" name="submit" value="DAFTAR" /><br>
            <center>
                <a class="link" href="{{ url('/admin/loginAdmin') }}">Cancel</a>
            </center>
		</form>
	  </div>
 </body>
</html>