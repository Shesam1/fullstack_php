<!doctype html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="description" content="">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Document</title>
	<link rel="stylesheet" href="css/style.css">
	<script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
	<style>
		*{
			font-family: sans-serif;
		}
		
	</style>
</head>
<body>
<?php require_once "nav.php"; ?>

<h2>Login</h2>
<form method="post">
<label>E-mail
	<input type="email" name="email"  value="" required><br>
</label>
	<br>
<label>Password
	<input type="password" name="pw"  value="" required><br>
</label>
<br>
<input type="submit" name="submit" value="Submit">  
</form>
</body>
</html>