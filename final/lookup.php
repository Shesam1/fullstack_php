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
		.error{
			color:#f00;
		}
		.profilecontainer{
			margin:0px auto;
			text-align: center;
		}
		.profilecontainer img{
			padding-bottom:10px;
			border: 10px #bbb double;
			width:300px;
			height:300px;
			border-radius: 50%;
			padding:10px;
		}
		.profilecontainer span{
			display: inline-block;
			width:49%;
		}
		.profilecontainer .left{
			text-align: right;
		}
		.profilecontainer .right{
			text-align: left;
		}
	</style>
</head>
<body>
<!-- php inject our Navigation using the require method -->
<?php require_once "nav.php"; ?>
	<h2>Lookup</h2>
	<!-- Upon submission we are going to rerun this file lookup.php which will execute the statement seen on line 59 -->
	<form method="post" action="lookup.php">
		<label>UserName:<br>
			<input type="text" name="user" required>
			<span class="error">*</span>
		</label>

		<input type="submit" name="submit" value="Submit">  
	</form>

<?php 
//Check if the input with the name user using the isset method in an if statement
	if(isset($_POST['user'])) {
		// Store the data from the form field into a variable and apply it to the string we will use as a image source
		$user = $_POST['user'];
		if (file_exists("$user/image.jpg")){
			$img = "$user/image.jpg";
		} else{
			$img = "$user/image.png";
		}
		// call the text file that we created in Postprocess.php this will specify which text file we received
		// please note that this only work if the text that was entered in the input matches a user that was already created
		// PHP will If the data from the input doesn't match our user that was created on the register page
		// if there is a match  then we call the text file  and turn each  line into an item in an array stored in $Profile
		$profile = file("$user/profile.txt");
		//print_r($profile);
		// the first and second line in our $Profile array has the name and email which we set and postprocess.php
		// by calling their index  Restore these values inside variables $name and $email
		// in addition we use the trim method to remove White space in these values
		$name = trim($profile[0]);
		$email = trim($profile[1]);
	} else{
		// on page load  or if no value was entered on submit we assign default values to the variables $imagedir, $name $email
		$user = "user";
		$img = "default.png";
		$name = "name";
		$email = "email";
	}
?>

<div class="profilecontainer">
	<!--  inside the image source, and the spans with the class of right we Echo the variables as specified above-->
	<img src="<?php echo $img ?>">
	<h3>
		<span class="left">User:&nbsp;</span>
		<span class="right"><?php echo $user ?></span>
		<span class="left">Name:&nbsp;</span>
		<span class="right"><?php echo $name ?></span>
	</h3>
	<h4>
		<span class="left">Email:&nbsp;</span>
		<span class="right"><?php echo $email ?></span>
	</h4>
</div>

</body>
</html>