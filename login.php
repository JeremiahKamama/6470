<?php session_start(); ?>
<!DOCTYPE html>
<html>
<head>
	<title>Login</title>
	<link rel="stylesheet" type="text/css" href="register.php">
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.css">
</head>
<body>
	<div class="container">
		<div class="jumbotron text-center">
			<h3>PLEASE LOG IN HERE</h3>
	<form method="POST" action="get.php">
	<input type="text" name="username" placeholder="input your username"><br>
	<hr>
	<input type="password" name="password" placeholder="........."><br>
	<hr>
	<input type="submit" name="submit" value="Login">
	</div>
	</div>
</form>
</body>
</html>