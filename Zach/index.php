<?php
   session_start();
   $method = getenv('REQUEST_METHOD');
   require_once 'config.php';
   require 'navbar.php';

   $username_err = $password_err = "";

   // checks if data was posted to form
   if($method == 'POST') {
	$username = mysqli_real_escape_string($connection, $_POST['username']);
	$password = mysqli_real_escape_string($connection, $_POST['password']);

	if(!empty($username) && !empty($password)) {
		// read from db to compare the login credentials
		$query = "select * from Users where username = '$username' limit 1";
		$r = mysqli_query($connection, $query);

		if($r) {
		   if($r && mysqli_num_rows($r) > 0) {
			$dat = mysqli_fetch_assoc($r);
			if($dat['password'] === $password) {
				$_SESSION['status'] = $dat['status'];
				$_SESSION['username'] = $dat['username'];
				$_SESSION['password'] = $dat['password'];
				header("Location: https://lamp.salisbury.edu/~wjenkins2/home.php");
				//die;
			}
		   }
		}
		echo "Please enter a valid username or password";
	}
   }
?>
<!DOCTYPE html>
<html lang="en">
   <head>
	<meta charset="UTF-8">
	<title>Login</title>
   <style>
    /* .wrapper {
	width: 360px;
	padding: 20px;
     } */
     body {
	background-color: maroon;
	color: #d4af37;
     }
     fieldset {
	width: 320px;
	padding: 10px;
	margin-bottom 10px;
     }

     legend {
	/*font-family: Georgia, "Times New Roman", serif;*/
	font-weight: bold;
     }

     label {
	font-family: Arial, sans-serif;
     }
   </style>
   </head>
   <body>
	   <script>
		$(this).closest('ul').addClass('active');
		$(this).closest('ul').removeClass();
	   </script>
	   <h1>Sign In</h1>
	   <form method="post" action="index.php">
	   <fieldset><legend>User Information</legend>
	       <label>Username
	       <input type="text" name="username" required="required" placeholder="Username"/></label><br><br>
	       <label>Password: 
	       <input type="password" name="password" required="required" placeholder="Password"/></label><br><br>
	   </fieldset>
	       <input type="submit" value="Login"/>
	   </form>
   </body>
</html>
