<?php 
session_start();
?>
<!DOCTYPE html>
<html>
<head>
	<title>Register</title>
	<link rel="stylesheet" type="text/css" href="login.php">
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.css">
</head>
<body>
	<div class="container">
		<div class="jumbotron text-center">
			<form method="POST" action="input.php">
	<input type="text" name="user" placeholder="Choose your username"><br>
	<input type="password" name="password" placeholder="Choose password"><br>
	<input type="number" name="number" placeholder="Phone Number"><br>
	<input type="submit" name="submit" value="Register Now" class="btn btn-success">
	<span><a href=""></a></span>
		</div>
	</div>

</form>
</body>
</html>