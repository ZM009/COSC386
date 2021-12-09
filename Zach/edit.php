<?php 
   require_once 'config.php';
   include 'navbar.php';
   include 'menu.php';
?>

<!DOCTYPE html>
<html>
<head>
   <title>Edit Page</title>
   <style>
	select {
		outline: none;
		border-radius: 8px;
	}
	
	.center {
		text-align: center;
	}

	form {
		float: left;
		margin-left: 39%;
	}
	
	[type=submit] {
		transition-duration: 0.4s;
		background-color: #d4af37;
		color: white;
		float: right;
		margin-left: 10px;
		padding: 4px 20px;
	}

	[type=submit]:hover {
		background-color: #4caf50;
		color: white;
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
   <h1 style="text-align: center;">Edit Page</h1> 
   <div class="center">
      <p>Select what you want to update from the dropdown below</p>
   </div>
   <form action="update.php" method="post">
      <label for="table">Select a value to update:</label>
      <select name="tableName" id="table">
	<option value="Students">Students</option>
	<option value="Events">Events</option>
	<option value="Organizations">Organizations</option>
	<option value="Advisors">Advisors</option>
	<option value="PNMs">PNMs</option>
	<option value="Philanthropy">Philanthropy</option>
	<option value="Councils">Councils</option>
	<option value="Corporation">Corporation</option>
      </select>
      <input type="submit" value="Submit">
   </form>
</body>
</html>
