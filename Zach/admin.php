<?php
include 'config.php';
require_once 'navbar.php';
?>

<!DOCTYPE html>
<html>
<head>
   <title>Admin Page</title>
   <style>
	body {
	   background-color: maroon;
	   color: #d4af37;
	}
	img {
	   display: block;
	   margin-left: auto;
	   margin-right: auto;
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
   <h1 style="text-align: center;">Admin Center</h1>

   <img src="https://cosida.com/common/controls/image_handler.aspx?thumb_id=0&image_path=/images/2019/2/21/SalisburyLogo.png" alt="Salisbury University Sammy the Sea Gull" style="width: 200px; height: 200px;">
   <form action="https://lamp.salisbury.edu/~zmoore4/COSC386/WillT/select.php" method="get">
	<input type="submit" value="Add Data" name="Submit" />
   </form>

   <form action="https://lamp.salisbury.edu/~zmoore4/COSC386/Brad/new.php" method="get">
	<input type="submit" value="Delete Data" name="Submit" />
   </form>
</body>
</html>
