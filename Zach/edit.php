<?php 
   require_once 'config.php';
   include 'navbar.php';
?>

<!DOCTYPE html>
<html>
<head>
   <title>Edit Page</title>
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
   <h1 style="text-align: center;">Edit Page</h1> 
   <img src="https://cosida.com/common/controls/image_handler.aspx?thumb_id=0&image_path=/images/2019/2/21/SalisburyLogo.png" alt="Salisbury University Sammy the Sea Gull" style="width: 200px; height: 200px;">
   
   <p>Select what you want to update</p>
   <form action="update.php" method="post">
      <label for="table">Select a value to update:</label>
      <select name="tableName" id="table">
	<option value="Students">Students</option>
	<option value="Events">Events</option>
      </select>
      <br><br>
      <input type="submit" value="Submit">
   </form>
</body>
</html>
