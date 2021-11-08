<?php
   session_start();  // this is needed for logging in users
		    // will either create or resume a session
   $method = getenv('REQUEST_METHOD'); // used to get the value of REQUEST_METHOD, could be POST, GET
   require_once 'config.php';
   require 'navbar.php';

   // checks if data was posted to form
   if($method == 'POST') {
	/* mysqli_real_escape_string is used to protect against SQL injections, as it escapes any special characters
	   that are inputted into the form.
	*/
	$username = mysqli_real_escape_string($connection, $_POST['username']);
	$password = mysqli_real_escape_string($connection, $_POST['password']);
	  
	// checks if the fields have some form of data entered
	if(!empty($username) && !empty($password)) {
		// read from db to compare the login credentials
		$query = "select * from Users where username = '$username' limit 1";   // limits the number of records returned by the query
		$r = mysqli_query($connection, $query);  // the result of the query is stored in r

		if($r) {
			// checks if r holds a successful query, and if there is any data returned by the query, (i.e. not an empty set)
		   if($r && mysqli_num_rows($r) > 0) {
			  // the following will only execute if the query returns something other than an empty set
			$dat = mysqli_fetch_assoc($r);  // dat will store the return of the query in an assciative array
			if($dat['password'] === $password) {
				$_SESSION['status'] = $dat['status'];   // sets the SESSION variable status to the associative array dat's value
				// if the login is successful, header() is used to redirect user back to home page for now
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
	font-weight: bold;
     }

     label {
	font-family: Arial, sans-serif;
     }
   </style>
   </head>
   <body>
	   <h1>Sign In</h1>
	   <form method="post" action="index.php">. <!-- if the action is not on its own page, if an error occurs, it could be thrown on another page -->
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
