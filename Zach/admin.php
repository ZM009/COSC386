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

	
  	form {
	   max-width: 420px;   /* prevents contact form becoming larger than 420px */
				/* margin has two values: top and bottom margin are 50px and the left and right margins
	   			   are calculated by the browser with the value 'auto'
				*/
	   margin: 50px auto;
  	}

	img {
	   display: block;
	   margin-left: auto;
	   margin-right: auto;
	}
	
	[type="submit"] {
	   font-family: Arial, Helvetica, sans-serif;
	   width: 100%;   
	   background: #ffd700;
	   border-radius: 5px;
	   border: 0;
	   cursor: pointer;
	   color: maroon;
	   font-size: 24px;
	   padding-top: 10px;
	   padding-bottom: 10px;
	   transition: all 0.3s;
	   margin-top: -4px;  /* sets space on top of element, outside of its border */
	   font-weight: 700;
	}

	
  	[type="submit"]:hover { background: #eebc1d; color: maroon; }

	
         .boxText {
            color: black;
            text-align:center;
            background-color: #ffcc66;
            width: 600px;
            border: 10px solid #d4af37;
            padding: 40px;
            margin-top:60px;
            margin-right: auto;
            margin-left:auto;
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
	<input type="submit" value="Add Data" name="Submit"/>
   </form>

   <form action="https://lamp.salisbury.edu/~zmoore4/COSC386/Brad/new.php" method="get">
	<input type="submit" value="Delete Data" name="Submit" />
   </form>

   <form action="#" method="get">
	<input type="submit" value="Update Data" name="Submit"/>
   </form>

   <p class="boxText">
	This is the admin page, which allows any authorized users to access the data of the Greek Life Database. The Add Data button redirects to the add page, which allows the admin to insert new members or information. The Delete Data button will redirect the user to the delete control center which allows them to delete any data from the database.
   </p>
</body>
</html>
