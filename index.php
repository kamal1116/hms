<?php include('server.php');


     if(empty($_SESSION['user'])) {
     	header("Location:login.php");
     }


?>
<?php include('nav.php'); ?>
<!DOCTYPE html>
<html>
<head>
	<title>User registration using php</title>
	<link rel="stylesheet" type="text/css" >
</head>
<body>
<div class = "textbox">
	<?php if (isset($_SESSION['success'])): ?>
	<div class="textbox">
		<h3>
			<?php 
			echo $_SESSION['success'];
			unset($_SESSION['success']);

			 ?>
		</h3>
	</div>

	<?php endif ?>
	<?php if (isset($_SESSION['user'])): ?>
		<button><a href="login.php?logout='1'" style="color:red;">Logout</a></button>
	<?php endif ; ?>
</div>
<p class="copyright">&copy; Copyright 2021 M^2K</p>

</body>
</html>
