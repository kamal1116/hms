<?php include('server.php'); ?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Transparent Login Form</title>
	<link rel="stylesheet"  href="style.css">
</head>
<body>
	<div class="login-box">
		<h1>Register</h1>
		<form method="post" action="reg.php">
			<?php include('errors.php'); ?>

		<div class="textbox">
			
			<input type="text" placeholder="Name" name="user" value="">
			
		</div>
		<div class="textbox">
			
			<input type="text" placeholder="Phone Number" name="phone" value="">
			
		</div>
		<div class="textbox">
			
			<input type="email" placeholder="Email" name="email" value="">
			
		</div>

		<div class="textbox">
			
			<input type="password" placeholder="Password" name="pass1" value="">
			
		</div>

		<div class="textbox">
			
			<input type="password" placeholder="Re-enter Password" name="pass2" value="">
			
		</div>
		<div class="textbox">
			<button  type="submit" name="register" class="btn">Register</button> 
		</div>
		<p>
		Already a member ? <a href="login.php">Sign in</a>
	</p>
	<p>
		Need help contact: 8919733781
	</p>
</form>
<p class="copyright">&copy; Copyright 2021 M^2K</p>
		
	</div>

</body>
</html>