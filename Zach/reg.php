<?php
session_start();
$method = getenv('REQUEST_METHOD');
// Include config file for the connection to the Greek Life DB
require_once 'config.php';
// require the navbar file to include navigation bar on registration page
require 'navbar.php';

// Define user variables
$username = $password = $confirm_password = "";
$username_err = $password_err = $confirm_password_err = "";

// Process form data when form is submitted
//$reqmethod = isset($_SERVER["REQUEST_METHOD"]) ? $_SERVER["REQUEST_METHOD"] : null;
if($method == "POST") {
	
	// Validate usr
	if(empty(trim($_POST['username']))) {
		$username_err = "Please enter a username. ";
	} else if(!preg_match('/^[a-zA-z0-9_]+$/', trim($_POST["username"]))) {
		$username_err = "Username cannot contain any special characters besides '_'.";
	} else {
		// select statement
		$query = "select status from Users where username = ?";
		if($stmt = mysqli_prepare($connection, $query)) {
			// bind the variables to prepared statement st, as params
			mysqli_stmt_bind_param($stmt, "s", $param_username);
			// set the parameters
			$param_username = trim($_POST["username"]);
			
			// Attempt to execute prepared statement
			if(mysqli_stmt_execute($stmt)) {
				/* store the result */
				mysqli_stmt_store_result($stmt);

				if(mysqli_stmt_num_rows($stmt) == 1) {
					$username_err = "Username taken!";
				} else {
					$username = trim($_POST["username"]);
				}
			} else {
				echo "A problem has occurred processing your request. Go Suck a PHAT one";
			}
			// close the statement
			mysqli_stmt_close($stmt);
		}
	}

	// validate the password
	if(empty(trim($_POST["password"]))) {
		$password_err = "Please enter a password.";
	} else if(strlen(trim($_POST["password"])) < 5) {
		$password_err = "Password must contain at least 5 characters!";
	} else {
		$password = trim($_POST["password"]);
	}

	// validate the password confirm
	if(empty(trim($_POST["confirm_password"]))) {
		$confirm_password_err = "Please confirm password.";
	} else {
		$confirm_password = trim($_POST["confirm_password"]);
		if(empty($password_err) && ($password != $confirm_password)) {
			$confirm_password_err = "Passwords did not match!";
		}
	}

	// before inserting into the users table, check for any input errors
	if(empty($username_err) && empty($password_err) && empty($confirm_password_err)) {
		// prepare insert query
		$query = "insert into Users (username, password) values (?, ?)";

		if($stmt2 = mysqli_prepare($connection, $query)) {
			//bind the variables to statement as params
			mysqli_stmt_bind_param($stmt2, "ss", $param_username, $param_password);
			// set username and password params
			$param_username = trim($_POST["username"]);
			// creates a password hash
			$param_password = password_hash($password, PASSWORD_DEFAULT);

			// attempts to execute the statement
			if(mysqli_stmt_execute($stmt2)) {
				// redirect to login page
				header("location: index.php");
			} else {
				echo "A problem has occurred processing your request. Try again later";
			}
			// close the statement
			mysqli_stmt_close($stmt2);
		}
	}
	// close the connection
	mysqli_close($connection);
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Sign Up</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <style>
	body{
	  background-color: maroon;
	  color: #d4af37;
	}
	a { color: white; }
	.invalid-feedback { color: white; }
	.wrapper{ width: 360px; padding: 20px; }
    </style>
</head>
<body>
    <div class="wrapper">
	<h2>Sign Up</h2>
	<p>Please fill out the form to create an SU Pantheon account.</p>
	<!--<form method="post" action="">-->
	<form method="post" action="reg.php">
	    <div class="form-group">
		<label>Username</label>
		<input type="text" name="username" class="form-control <?php echo (!empty($username_err)) ? 'is-invalid' : ''; ?>" value="<?php echo $username; ?>" placeholder="Username">
		<span class="invalid-feedback"><?php echo $username_err; ?></span>
	    </div>
	    <div class="form-group">
		<label>Password</label>
		<input type="password" name="password" class="form-control <?php echo (!empty($password_err)) ? 'is-invalid' : ''; ?>" value="<?php echo $password; ?>" placeholder="Password">
		<span class="invalid-feedback"><?php echo $password_err; ?></span>
	    </div>
	    <div class="form-group">
		<label>Confirm Password</label>
		<input type="password" name="confirm_password" class="form-control <?php echo (!empty($confirm_password_err)) ? 'is-invalid' : ''; ?>" value="<?php echo $confirm_password; ?>" placeholder="Confirm Password">
		<span class="invalid-feedback"><?php echo $confirm_password_err; ?></span>
	    </div>
	    <div class="form-group">
		<input type="submit" class="btn btn-primary" value="Submit">
		<input type="reset"  class="btn btn-secondary ml2" value="Reset">
	    </div>
	    <p>Already have an account? <a href="index.php">Login here</a>.</p>
	</form>
    </div>
</body>
</html>		
