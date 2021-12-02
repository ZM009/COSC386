<?php
include 'config.php';
require_once 'navbar.php';
?>

<!DOCTYPE html>
<html>
<head>
   <title>Admin Login</title>
   <style>
	body {
	   background-color: maroon;
	   color: #d4af37;
	}
   </style>
</head>
<body>
   <script type="text/javascript">
	window.onload = function() {
		document.getElementById("admin").className += "active";
		document.getElementById("home").className = document.getElementById("home").className.replace( /(?:^|\s)active(?!\S)/g , ' ' )
		document.getElementById("contact").className = document.getElementById("contact").className.replace( /(?:^|\s)active(?!\S)/g , ' ' )
		document.getElementById("about").className = document.getElementById("about").className.replace( /(?:^|\s)active(?!\S)/g , ' ' )
	}
   </script>
   <h1>Admin Center</h1>
</body>
</html>
