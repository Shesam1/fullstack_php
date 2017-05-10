<?php ?>

<!doctype html>
<html>
<head>
	<meta charset="utf-8">
	<title>Document</title>
	<link rel="stylesheet" href="style.css">
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
<!--Echo all our super global session variables within our HTML-->
<p>Your ID is: <?php ?> </p>
<p>Your TIME is: <?php ?> </p>
<p>Your NAME is: <?php ?> </p>
<p>Your EMAIL is: <?php ?> </p>
<p>Your PASSWORD is: <?php ?> </p>

<p><a href="logout.php">logout</a></p>

</body>
</html>