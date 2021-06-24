<?php include('server.php'); ?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Login</title>
	<link rel="stylesheet"  href="style.css">
</head>
<body>
	<label class="logo">M^2K</label>
	<div class="login-box">
		<h1>Login</h1>
		<form method="post" action="login.php">
			<?php include('errors.php'); ?>
		<div class="textbox">
			<i class="fa fa-user" aria-hidden="true"></i>
			<input type="text" placeholder="Username" name="user" value="" required="">
			
		</div>
		<div class="textbox">
			<i class="fa fa-lock" aria-hidden="true"></i>
			<input type="password" placeholder="Password" name="pass" value="" required="">
			
		</div>
		<div class="textbox">
			<button  type="submit" name="login" class="btn">Sign in</button> 
		</div>
		<p>
		Not a member ? <a href="reg.php" class="textbox">Sign up</a>
	</p>
	<p>
		Need help contact: 8919733781
	</p>
	</form>
	<p class="copyright">&copy; Copyright 2021 M^2K</p>
	</div>


</body>
</html>