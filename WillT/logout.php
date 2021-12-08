<?php
session_start(); // resumes session of user currently signed in

/* if the SESSION variable is set, unset the values before destroying the session data */
if(isset($_SESSION['username'])) {
	unset($_SESSION['username']);
}

session_destroy();  // destroys all session data upon logging out
header("Location: https://lamp.salisbury.edu/~wjenkins2/home.php");    // redirects to home page
?>
