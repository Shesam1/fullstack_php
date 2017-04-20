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
<form method="post" action="login.php">
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
	if (empty($_POST['email']) || empty($_POST['pw'])) {
	echo "Username or Password is invalid";
} else {
	$email=$_POST['email'];
	$pw=$_POST['pw'];

	$connection = mysqli_connect("localhost", "root", "root", "phptest");

	$query = "select * from capture where pw='$pw' AND email='$email'";

	$loginCheck = mysqli_query($connection, $query);

	$rows = mysqli_num_rows($loginCheck);

	echo $rows;

	echo "<br>";

	if ($rows == 1) {
		while($row = mysqli_fetch_assoc($loginCheck)) {
			//echo $row["uid"].'<br>';
			$_SESSION['uid'] = $row["uid"];
			//echo $row["time"].'<br>';
			$_SESSION['time'] = $row["time"];
			//echo $row["name"].'<br>';
			$_SESSION['name'] = $row["name"];
			//echo $row["email"].'<br>';
			$_SESSION['email'] = $row["email"];
			//echo $row["pw"].'<br>';
			$_SESSION['pw'] = $row["pw"];
			echo "<a href=\"profile.php\">proceed to profile</a>";
		}
	} 
	else {
		echo "try again";
	}
	mysqli_close($connection); // Closing Connection
}
}
?>

</body>
</html>