<?php
session_start();
?>
<!DOCTYPE html>
<html>
<head>
   <style>
	body {
	   margin: 0px;
	}
	ul {
	   list-style-type: none;
	   margin: 0px;
	   padding: 0px;
	   font-weight: 900;
	}
	/* styles the navigation bar itself */
	.topnav {
	   position: -webkit-sticky; /* Safari */
	   position: sticky;
	   top: 0;
	   background-color: black;
	   overflow: hidden;
	}

	/* Styles links in navigation bar */
	.topnav a {
	   float: left;
	   color: #F2F2F2;
	   text-align: center;
	   padding: 14px 16px;
	   text-decoration: none;
	   font-size: 17px;
	}

	/* :hover allows the color of the links to change when the mouse
           hovers over them */
	.topnav a:hover {
	   background-color: white;
	   color: black;
	}

	.topnav a.active {
	   background-color: #ffd700;
	   color: #800;
	}

   </style>
</head>
<body>
   <div class="topnav">
     <ul>
	<a class="active" href="https://lamp.salisbury.edu/~wjenkins2/home.php">Home</a>
	<a href="https://lamp.salisbury.edu/~zmoore4/COSC386/index.php">Login</a>
	<a href="https://lamp.salisbury.edu/~zmoore4/COSC386/reg.php">Register</a>
	<a href="https://lamp.salisbury.edu/~zmoore4/COSC386/contact.php">Contact</a>
	<?php if(isset($_SESSION['username'])) { ?>
	<a style="float:right" href="https://lamp.salisbury.edu/~zmoore4/COSC386/logout.php">Logout</a>
	<a style="float:right" href="https://lamp.salisbury.edu/~zmoore4/COSC386/admin.php">Admin</a>
	<?php } else { ?>
	<a style="float:right" href="#">Admin</a>
	<?php } ?>
	<a href="https://lamp.salisbury.edu/~adepace1/about.php">About</a>
     </ul>
   </div>
</body>
</html>

