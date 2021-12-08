<?php
   require_once 'config.php';
   include 'navbar.php';
?>
<!DOCTYPE html>
<html>
<head>
   <style>
	body {
	   background-color: maroon;
	   color: #d4af37;
	}
   </style>
</head>
<body>
<?php
   $table = $_POST['tableName'];
   
   if(strcmp($table, "Students") == 0) {
	echo "You have chosen to update a Student";
?> 
  <form method="post">
	<label for="table">Select an individual value to change:</label>
        <select name="stuTable" id="table">
	   <option name="update" value="stuName">Name</option>
	   <option name="update" value="stuId">ID</option>
	   <option name="update" value="volunteer_hrs">Volunteer Hrs.</option>
	   <option name="update" value="stuEmail">Email</option>
	   <option name="update" value="stuOrg">Organization Name</option>
	</select>
	<br><br>
	<input type="submit" value="Submit"/>
   </form>

<?php
   } else if(strcmp($table, "Events") == 0) {
	echo "You have chosen to update an Event";
?>
   <form method="post">
	<label for=table">Select an individual value to change:</label>
	<select name="tableName" id="table">
	   <option value="eventName">Name</option>
	   <option value="eventDate">Event Date</option>
	   <option value="eventLoc">Event Location</option>
	   <option value="eventTime">Event Time</option>
	</select>
	<br><br>
	<input type="submit" value="Submit"/>
   </form>
<?php
   }
?>
 
<?php 
   if(strcmp($_POST['stuTable'], "stuName") == 0) {
?>
   <form method="post">
	Student Name: <input type="text" name="sName">
	<input type="submit" value="Submit">
   </form>
<?php } else if(strcmp($_POST['stuTable'], "stuId") == 0) {
?>
   <form method="post">
	Student ID: <input type="text" name="sId">
	<input type="submit" value="Submit">
   </form>
<?php } ?> 
</body>
</html> 
