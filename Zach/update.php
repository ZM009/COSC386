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
	<select name="events" id="table">
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
	<label for="table">Select another value to change?</label>
        <select name="stuTable" id="table">
	   <option name="update" value="stuName">Name</option>
	   <option name="update" value="stuId">ID</option>
	   <option name="update" value="volunteer_hrs">Volunteer Hrs.</option>
	   <option name="update" value="stuEmail">Email</option>
	   <option name="update" value="stuOrg">Organization Name</option>
	</select>
	<input type="submit" value="Submit"/>
   </form>

   <form method="post">
	Student Name: <input type="text" name="sName">
	New Name: <input type="text" name="newName">
	<input type="submit" value="Submit">
   </form>
<?php } else if(strcmp($_POST['stuTable'], "stuId") == 0) {
?>

   
   <form method="post">
	<label for="table">Select another value to change?</label>
        <select name="stuTable" id="table">
	   <option name="update" value="stuName">Name</option>
	   <option name="update" value="stuId">ID</option>
	   <option name="update" value="volunteer_hrs">Volunteer Hrs.</option>
	   <option name="update" value="stuEmail">Email</option>
	   <option name="update" value="stuOrg">Organization Name</option>
	</select>
	<input type="submit" value="Submit"/>
   </form>

   <form method="post">
	Student ID: <input type="text" name="sId">
	New ID: <input type="text" name="newId">
	<input type="submit" value="Submit">
   </form>
<?php } else if(strcmp($_POST['stuTable'], "volunteer_hrs") == 0) { ?>

    
   <form method="post">
	<label for="table">Select another value to change?</label>
        <select name="stuTable" id="table">
	   <option name="update" value="stuName">Name</option>
	   <option name="update" value="stuId">ID</option>
	   <option name="update" value="volunteer_hrs">Volunteer Hrs.</option>
	   <option name="update" value="stuEmail">Email</option>
	   <option name="update" value="stuOrg">Organization Name</option>
	</select>
	<input type="submit" value="Submit"/>
   </form>
 
   <form method="post">
	Name of Volunteer: <input type="text" name="studentName">
	Volunteer Hours: <input type="text" name="volunteer">
	Edited Hours: <input type="text" name="newHrs">
	<input type="submit" value="Submit"/>
   </form>
<?php } else if(strcmp($_POST['stuTable'], "stuEmail") == 0) { ?>

      
   <form method="post">
	<label for="table">Select another value to change?</label>
        <select name="stuTable" id="table">
	   <option name="update" value="stuName">Name</option>
	   <option name="update" value="stuId">ID</option>
	   <option name="update" value="volunteer_hrs">Volunteer Hrs.</option>
	   <option name="update" value="stuEmail">Email</option>
	   <option name="update" value="stuOrg">Organization Name</option>
	</select>
	<input type="submit" value="Submit"/>
   </form>

   <form method="post">
	Current Email: <input type="text" name="sEmail">
	New Email: <input type="text" name="newEmail">
	<input type="submit" value="Submit">
   </form>
<?php } else if(strcmp($_POST['stuTable'], "stuOrg") == 0 ) { ?>


   <form method="post">
	<label for="table">Select another value to change?</label>
        <select name="stuTable" id="table">
	   <option name="update" value="stuName">Name</option>
	   <option name="update" value="stuId">ID</option>
	   <option name="update" value="volunteer_hrs">Volunteer Hrs.</option>
	   <option name="update" value="stuEmail">Email</option>
	   <option name="update" value="stuOrg">Organization Name</option>
	</select>
	<input type="submit" value="Submit"/>
   </form>

   <form method="post">
	Student Name: <input type="text" name="studentName">
	Current Organization: <input type="text" name="stuOrg">
	New Organization: <input type="text" name="newOrg">
	<input type="submit" value="Submit">
   </form>
<?php } ?>

<?php if(strcmp($_POST['events'], "eventName") == 0) { ?>
   <form method="post">
	<label for=table">Select another value to change?</label>
	<select name="events" id="table">
	   <option value="eventName">Name</option>
	   <option value="eventDate">Event Date</option>
	   <option value="eventLoc">Event Location</option>
	   <option value="eventTime">Event Time</option>
	</select>
	<input type="submit" value="Submit"/>
   </form>

   <form method="post">
	Event Name: <input type="text" name="eName">
	Current Date: <input type="text" name="eDate">
	New Event: <input type="text" name="newName">
	<input type="submit" value="Submit"/>
   </form>
<?php } else if(strcmp($_POST['events'], "eventDate") == 0) { ?>
   <form method="post">
	<label for="table">Select another value to change?</label>
	<select name="events" id="table">
	   <option value="eventName">Name</option>
	   <option value="eventDate">Event Date</option>
	   <option value="eventLoc">Event Location</option>
	   <option value="eventTime">Event Time</option>
	</select>
	<input type="submit" value="Submit"/>
   </form>

   <form method="post">
	Event Name: <input type="text" name="eName">
	Current Date: <input type="text" name="eDate">
	New Date: <input type="text" name="newDate">
	<input type="submit" value="Submit"/>
   </form>
<?php } else if(strcmp($_POST['events'], "eventLoc") == 0) { ?>
    
   <form method="post">
	<label for="table">Select another value to change?</label>
	<select name="events" id="table">
	   <option value="eventName">Name</option>
	   <option value="eventDate">Event Date</option>
	   <option value="eventLoc">Event Location</option>
	   <option value="eventTime">Event Time</option>
	</select>
	<input type="submit" value="Submit"/>
   </form>

   <form method="post">
	Event Name: <input type="text" name="eName">
	Current Location: <input type="text" name="eLoc">
	New Location: <input type="text" name="newLoc">
	<input type="submit" value="Submit"/>
	<br><br> Date: <input type="text" name="eDate">
   </form>
<?php } else if(strcmp($_POST['events'], "eventTime") == 0) { ?>
   <form method="post">
	<label for="table">Select another value to change?</label>
	<select name="events" id="table">
	   <option value="eventName">Name</option>
	   <option value="eventDate">Event Date</option>
	   <option value="eventLoc">Event Location</option>
	   <option value="eventTime">Event Time</option>
	</select>
	<input type="submit" value="Submit"/>
   </form>

   <form method="post">
	Event Name: <input type="text" name="eName">
	Current Time: <input type="text" name="eTime">
	New Time: <input type="text" name="newTime">
	<input type="submit" value="Submit"/>
	<br><br> Date: <input type="text" name="eDate">
   </form>
<?php } ?>

<?php 
   if(isset($_POST['sName'])) {
	$name = $_POST["sName"];
	$new = $_POST["newName"];
	echo "<script>alert('$name')</script>";
	$query = "select * from Students where name = '$name' limit 1";
	$r = mysqli_query($connection, $query);
	if($r) {
		$dat = mysqli_fetch_assoc($r);
		if(count($dat) != 0) {
			echo 'Tuple Exists!';
			$query = "update Students set name = '$new' where name = '$name' limit 1";
			$update = mysqli_query($connection, $query);
		} else {
			echo 'Update Failure: Student does not exist!';
		}
	} else {
			echo 'Update Failure: Critical Error';
	}
   } else if(isset($_POST['sId'])) {
	$id = $_POST['sId'];
	$newId = $_POST['newId'];
	echo "<script>alert('$id')</script>";
	$query = "select * from Students where id = '$id' limit 1";
	$r = mysqli_query($connection, $query);
	if($r) {
		$dat = mysqli_fetch_assoc($r);
		if(count($dat) != 0) {
			echo 'Tuple Exists!';
			$query = "update Students set id = '$newId' where id = '$id' limit 1";
			$update = mysqli_query($connection, $query);
		} else {
			echo 'Update Failure: Student does not exist!';
		}
	} else {
		echo 'Update Failure: Critical Error';
	}
   } else if(isset($_POST['volunteer'])) {	
	$hrs = $_POST['volunteer'];
	$newhrs = $_POST['newHrs'];
	$name = $_POST['studentName'];
	echo "<script>alert('$hrs')</script>";
	$query = "select * from Students where volunteer_hrs = '$hrs' and name = '$name' limit 1";
	$r = mysqli_query($connection, $query);
	if($r) {
		$dat = mysqli_fetch_assoc($r);
		if(count($dat) != 0) {
			echo 'Tuple Exists!';
			$query = "update Students set volunteer_hrs = '$newhrs' where volunteer_hrs = '$hrs' and name = '$name' limit 1";
			$update = mysqli_query($connection, $query);
		} else {
			echo 'Update Failure: Student does not exist!';
		}
	} else {
		echo 'Update Failure: Critical Error';
	}
   } else if(isset($_POST['sEmail'])) {
	$curr = $_POST['sEmail'];
	$new = $_POST['newEmail'];
	echo "<script>alert('$curr')</script>";
	$query = "select * from Students where email = '$curr' limit 1";
	$r = mysqli_query($connection, $query);
	if($r) {
		$dat = mysqli_fetch_assoc($r);
		if(count($dat) != 0) {
			echo 'Tuple Exists!';
			$query = "update Students set email = '$new' where email = '$curr' limit 1";
			$update = mysqli_query($connection, $query);
		} else {
			echo 'Update Failure: Student does not exist!';
		}
	} else {
		echo 'Update Failure: Critical Error';
	}
   } else if(isset($_POST['stuOrg'])) {
	$curr = $_POST['stuOrg'];
	$new = $_POST['newOrg'];
	$name = $_POST['studentName'];
	echo "<script>alert('$curr')</script>";
	$query = "select * from Students where orgName = '$curr' and name = '$name' limit 1";
	$r = mysqli_query($connection, $query);
	if($r) {
		$dat = mysqli_fetch_assoc($r);
		if(count($dat) != 0) {
			echo 'Tuple Exists!';
			$query = "update Students set orgName = '$new' where orgName = '$curr' and name = '$name' limit 1";
			$update = mysqli_query($connection, $query);
		} else {
			echo 'Update Failure: Student does not exist!';
		}
	} else {
		echo 'Update Failure: Critical Error';
	}
   }

   # continue with new if statement for Events...
   if(isset($_POST['eName'])) {
	$curr = $_POST['eName'];
	$new = $_POST['newName'];
	$date = $_POST['eDate'];
	echo "<script>alert('$curr')</script>";
	$query = "select * from Events where name = '$curr' and date = '$date' limit 1";
	$r = mysqli_query($connection, $query);
	if($r) {
		$dat = mysqli_fetch_assoc($r);
		if(count($dat) != 0) {
			echo 'Tuple Exists!';
			$query = "update Events set name = '$new' where name = '$curr' and date = '$date' limit 1";
			$update = mysqli_query($connection, $query);
		} else {
			echo 'Update Failure: Student does not exist!';
		}
	} else {
		echo 'Update Failure: Critical Error';
   	}
   } else if(isset($_POST['eDate'])) {
	$curr = $_POST['eDate'];
	$new = $_POST['newDate'];
	$name = $_POST['eName'];
 	echo "<script>alert('$curr')</script>";
	$query = "select * from Events where name = '$name' and date = '$curr' limit 1";
	$r = mysqli_query($connection, $query);
	if($r) {
		$dat = mysqli_fetch_assoc($r);
		if(count($dat) != 0) {
			echo 'Tuple Exists';
			$query = "update Events set date = '$new' where name = '$curr' and date = '$curr' limit 1";
			$update = mysqli_query($connection, $query);
		} else {
			echo 'Update Failure: Event does not exist!';
		}
	} else {
		echo 'Update Failure: Critical Error';
	}
   } else if(isset($_POST['eLoc'])) { 
	$curr = $_POST['eLoc'];
	$new = $_POST['newLoc'];
	$name = $_POST['eName'];
	$date = $_POST['eDate'];
 	echo "<script>alert('$curr')</script>";
	$query = "select * from Events where name = '$name' and location = '$curr' and date = '$date' limit 1";
	$r = mysqli_query($connection, $query);
	if($r) {
		$dat = mysqli_fetch_assoc($r);
		if(count($dat) != 0) {
			echo 'Tuple Exists';
			$query = "update Events set location = '$new' where name = '$name' and location = '$curr' and date = '$date' limit 1";
			$update = mysqli_query($connection, $query);
		} else {
			echo 'Update Failure: Event does not exist!';
		}
	} else {
		echo 'Update Failure: Critical Error';
	}
   } else if(isset($_POST['eTime'])) {	
	$curr = $_POST['eTime'];
	$new = $_POST['newTime'];
	$name = $_POST['eName'];
	$date = $_POST['eDate'];
 	echo "<script>alert('$curr')</script>";
	$query = "select * from Events where name = '$name' and time = '$time' and date = '$date' limit 1";
	$r = mysqli_query($connection, $query);
	if($r) {
		$dat = mysqli_fetch_assoc($r);
		if(count($dat) != 0) {
			echo 'Tuple Exists';
			$query = "update Events set time = '$new' where name = '$name' and time = '$curr' and date = '$date' limit 1";
			$update = mysqli_query($connection, $query);
		} else {
			echo 'Update Failure: Event does not exist!';
		}
	} else {
		echo 'Update Failure: Critical Error';
	}
   }

?>
</body>
</html> 
