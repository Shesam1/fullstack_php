<?php session_start();// Starting Session ?>

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
<!-- php inject our Navigation using the require method -->
<?php require_once "nav.php"; ?>

<!-- Continue HTML -->
<h2>Login</h2>
<p>Your ID is: <?php echo $_SESSION['uid']; ?> </p>
<p>Your TIME is: <?php echo $_SESSION['time']; ?> </p>
<p>Your NAME is: <?php echo $_SESSION['name']; ?> </p>
<p>Your EMAIL is: <?php echo $_SESSION['email']; ?> </p>
<p>Your PASSWORD is: <?php echo $_SESSION['pw']; ?> </p>
	
<p><a href="logout.php">logout</a></p>

</body>
</html>