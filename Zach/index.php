<?php
   require 'navbar.php';
?>
<!DOCTYPE html>
<html lang="en">
   <head>
	<meta charset="UTF-8">
	<title>SU Pantheon</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
   <style>
     a.button {
	border: none;
	color: white;
	padding: 16px 32px;
	text-align: center;
	text-decoration: none;
	display: inline-block;
	font-size: 16px;
	margin: 4px 2px;
	transition-duration: 0.4s;
	cursor: pointer;   }
 
     a.register {
	background-color: white;
	color: black;
	border: 2px solid #800000;   }

     a.register:hover {
	background-color: #FFD700;
	color: #800000;   }

     body {
/*	text-align: center; */
	font: 14px sans-serif;
     }
     .wrapper {
	width: 360px;
	padding: 20px;
     }
   </style>
   </head>
   <body>
	<div class="wrapper">
	   <h2>Sign In<h2>
	   <!--<a href="reg.php" class="button register">Click Here to Register</a><br>-->
	   <form method="post" action="index.php">
	       <div class="form-group">
	          <label>Username</label>
		  <input type="text" name="username" class="form-control" required="required" placeholder="Username"/><br>
	       </div>
	       <div class="form-group">
		  <label>Password</label>
	          <input type="password" name="password" class="form-control" required="required" placeholder="Password"/><br>
	       </div>
	       <div class="form-group">
	          <input type="submit" class="btn btn-primary" value="Login"/>
	       </div>
	   <form>
	</div>
   </body>
</html>
