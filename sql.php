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
<h2>Upload data to SQL</h2>
<form method="post" action="sql.php">
<label>Name
	<input type="text" name="name" value="" required><br>
</label>
<br>
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

<?php 
	if(isset($_POST['submit'])){
		$name=$_POST['name'];
		$email=$_POST['email'];
		$pw=$_POST['pw'];

		// Establishing Connection with Server by passing server_name, user_id and password as a parameter
		$connection = mysqli_connect("localhost", "root", "root", "phptest");

		$query = "INSERT INTO capture (uid, time, name, email, pw) VALUES (NULL, NULL, '$name', '$email','$pw');";

		mysqli_query($connection, $query);

		if ($connection) {
			echo "new record added";
		} else {
				echo "Error: " . $query . "<br>" . $connection->error;
		}
		mysqli_close($connection); // Closing Connection
	}
?>

</body>
</html>