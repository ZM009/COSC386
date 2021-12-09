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
   } else if(strcmp($table, "Organizations") == 0) { ?>
   <form method="post">
        <label for=table">Select an individual value to change:</label>
        <select name="orgs" id="table">
	   <option value="orgName">Name</option>
	   <option value="colors">Event Date</option>
	   <option value="type">Event Location</option>
	   <option value="quota">Event Time</option>
	   <option value="dues">Dues</option>
	   <option value="members">Num Members</option>
	   <option value="motto">Motto</option>
	   <option value="advEmail">Advisor's Email</option>
	   <option value="philName">Philanthropy</option>
	   <option value="council">Council</option>
        </select>
       <br><br>
       <input type="submit" value="Submit"/>
   </form>
<?php } else if(strcmp($table, "Advisors") == 0) { ?>
 
   <form method="post">
        <label for=table">Select an individual value to change:</label>
        <select name="advisors" id="table">
	   <option value="advName">Name</option>
	   <option value="advId">ID</option>
	   <option value="dept">Department</option>
	   <option value="advisorEmail">Email</option>
        </select>
       <br><br>
       <input type="submit" value="Submit"/>
   </form>
<?php } else if(strcmp($table, "PNMs") == 0) { ?>

   <form method="post">
        <label for=table">Select an individual value to change:</label>
        <select name="pnms" id="table">
	   <option value="pId">ID</option>
	   <option value="pName">Name</option>
        </select>
       <br><br>
       <input type="submit" value="Submit"/>
   </form>

<?php } else if(strcmp($table, "Philanthropy") == 0) { ?>
   <form method="post">
	<label for="table">Select an individual value to change:</label>
	<select name="phils" id="table">
	   <option value="philName2">Name</option>
	   <option value="donations">Donations</option>
	</select>
	<br><br>
	<input type="submit" value="Submit"/>
   </form>
<?php } else if(strcmp($table, "Councils") == 0) { ?>
   <form method="post">
	Council: <input type="text" name="cName">
	New Council Name: <input type="text" name="newCouncilName">
	<input type="submit" value="Submit"/>
   </form>
<?php } else if(strcmp($table, "Corporation") == 0) { ?>
   <form method="post">
	<label for="table">Select an individual value to change:</label>
	<select name="corps" id="table">
	   <option value="corpName">Corp Name</option>
	   <option value="service">Service Type</option>
	</select>
	<br><br>
	<input type="submit" value="Submit"/>
   </form>
<?php } ?>

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
<?php } else if(strcmp($_POST['orgs'], "orgName") == 0) { ?> 
   <form method="post">
        <label for=table">Select another value to change?</label>
        <select name="orgs" id="table">
	   <option value="orgName">Name</option>
	   <option value="colors">Event Date</option>
	   <option value="type">Event Location</option>
	   <option value="quota">Event Time</option>
	   <option value="dues">Dues</option>
	   <option value="members">Num Members</option>
	   <option value="motto">Motto</option>
	   <option value="advEmail">Advisor's Email</option>
	   <option value="philName">Philanthropy</option>
	   <option value="council">Council</option>
        </select>
       <input type="submit" value="Submit"/>
   </form>

   <form method="post">
	Organization Name: <input type="text" name="orgName">
	New Name: <input type="text" name="newOrg">
	<input type="submit" value="Submit"/>
   </form>
<?php } else if(strcmp($_POST['orgs'], "color") == 0) { ?>
   <form method="post">
        <label for=table">Select another value to change?</label>
        <select name="orgs" id="table">
	   <option value="orgName">Name</option>
	   <option value="colors">Event Date</option>
	   <option value="type">Event Location</option>
	   <option value="quota">Event Time</option>
	   <option value="dues">Dues</option>
	   <option value="members">Num Members</option>
	   <option value="motto">Motto</option>
	   <option value="advEmail">Advisor's Email</option>
	   <option value="philName">Philanthropy</option>
	   <option value="council">Council</option>
        </select>
       <input type="submit" value="Submit"/>
   </form>

   <form method="post">
	Organization Name: <input type="text" name="orgName">
	New Colors: <input type="text" name="newColors">
	<input type="submit" value="Submit"/>
   </form>
<?php } else if(strcmp($_POST['orgs'], "type") == 0) { ?> 
   <form method="post">
        <label for=table">Select another value to change?</label>
        <select name="orgs" id="table">
	   <option value="orgName">Name</option>
	   <option value="colors">Event Date</option>
	   <option value="type">Event Location</option>
	   <option value="quota">Event Time</option>
	   <option value="dues">Dues</option>
	   <option value="members">Num Members</option>
	   <option value="motto">Motto</option>
	   <option value="advEmail">Advisor's Email</option>
	   <option value="philName">Philanthropy</option>
	   <option value="council">Council</option>
        </select>
       <input type="submit" value="Submit"/>
   </form>

   <form method="post">
	Organization Name: <input type="text" name="orgName">
	New Type: <input type="text" name="newType">
	<input type="submit" value="Submit"/>
   </form>
<?php } else if(strcmp($_POST['orgs'], "quota") == 0) { ?> 
   <form method="post">
        <label for=table">Select another value to change?</label>
        <select name="orgs" id="table">
	   <option value="orgName">Name</option>
	   <option value="colors">Event Date</option>
	   <option value="type">Event Location</option>
	   <option value="quota">Event Time</option>
	   <option value="dues">Dues</option>
	   <option value="members">Num Members</option>
	   <option value="motto">Motto</option>
	   <option value="advEmail">Advisor's Email</option>
	   <option value="philName">Philanthropy</option>
	   <option value="council">Council</option>
        </select>
       <input type="submit" value="Submit"/>
   </form>

   <form method="post">
	Organization Name: <input type="text" name="orgName">
	New Quota: <input type="text" name="newQuota">
	<input type="submit" value="Submit"/>
   </form>
<?php } else if(strcmp($_POST['orgs'], "dues") == 0) { ?>
   <form method="post">
        <label for=table">Select another value to change?</label>
        <select name="orgs" id="table">
	   <option value="orgName">Name</option>
	   <option value="colors">Event Date</option>
	   <option value="type">Event Location</option>
	   <option value="quota">Event Time</option>
	   <option value="dues">Dues</option>
	   <option value="members">Num Members</option>
	   <option value="motto">Motto</option>
	   <option value="advEmail">Advisor's Email</option>
	   <option value="philName">Philanthropy</option>
	   <option value="council">Council</option>
        </select>
       <input type="submit" value="Submit"/>
   </form>

   <form method="post">
	Organization Name: <input type="text" name="orgName">
	New Dues Amount: <input type="text" name="newDues">
	<input type="submit" value="Submit"/>
   </form>
<?php } else if(strcmp($_POST['orgs'], "members") == 0) { ?>
   <form method="post">
        <label for=table">Select another value to change?</label>
        <select name="orgs" id="table">
	   <option value="orgName">Name</option>
	   <option value="colors">Event Date</option>
	   <option value="type">Event Location</option>
	   <option value="quota">Event Time</option>
	   <option value="dues">Dues</option>
	   <option value="members">Num Members</option>
	   <option value="motto">Motto</option>
	   <option value="advEmail">Advisor's Email</option>
	   <option value="philName">Philanthropy</option>
	   <option value="council">Council</option>
        </select>
       <input type="submit" value="Submit"/>
   </form>

   <form method="post">
	Organization Name: <input type="text" name="orgName">
	New Member Count: <input type="text" name="newMembers">
	<input type="submit" value="Submit"/>
   </form>

<?php } else if(strcmp($_POST['orgs'], "motto") == 0) { ?>
   <form method="post">
        <label for=table">Select another value to change?</label>
        <select name="orgs" id="table">
	   <option value="orgName">Name</option>
	   <option value="colors">Event Date</option>
	   <option value="type">Event Location</option>
	   <option value="quota">Event Time</option>
	   <option value="dues">Dues</option>
	   <option value="members">Num Members</option>
	   <option value="motto">Motto</option>
	   <option value="advEmail">Advisor's Email</option>
	   <option value="philName">Philanthropy</option>
	   <option value="council">Council</option>
        </select>
       <input type="submit" value="Submit"/>
   </form>

   <form method="post">
	Organization Name: <input type="text" name="orgName">
	New Motto: <input type="text" name="newMotto">
	<input type="submit" value="Submit"/>
   </form>
<?php } else if(strcmp($_POST['orgs'], "advEmail") == 0) { ?>
   <form method="post">
        <label for=table">Select another value to change?</label>
        <select name="orgs" id="table">
	   <option value="orgName">Name</option>
	   <option value="colors">Event Date</option>
	   <option value="type">Event Location</option>
	   <option value="quota">Event Time</option>
	   <option value="dues">Dues</option>
	   <option value="members">Num Members</option>
	   <option value="motto">Motto</option>
	   <option value="advEmail">Advisor's Email</option>
	   <option value="philName">Philanthropy</option>
	   <option value="council">Council</option>
        </select>
       <input type="submit" value="Submit"/>
   </form>

   <form method="post">
	Organization Name: <input type="text" name="orgName">
	New Advisor: <input type="text" name="newEmail">
	<input type="submit" value="Submit"/>
   </form>

<?php } else if(strcmp($_POST['orgs'], "philName") == 0) { ?>
   <form method="post">
        <label for=table">Select another value to change?</label>
        <select name="orgs" id="table">
	   <option value="orgName">Name</option>
	   <option value="colors">Event Date</option>
	   <option value="type">Event Location</option>
	   <option value="quota">Event Time</option>
	   <option value="dues">Dues</option>
	   <option value="members">Num Members</option>
	   <option value="motto">Motto</option>
	   <option value="advEmail">Advisor's Email</option>
	   <option value="philName">Philanthropy</option>
	   <option value="council">Council</option>
        </select>
       <input type="submit" value="Submit"/>
   </form>

   <form method="post">
	Organization Name: <input type="text" name="orgName">
	New Philanthropy: <input type="text" name="newPhil">
	<input type="submit" value="Submit"/>
   </form>

<?php } else if(strcmp($_POST['orgs'], "council") == 0) { ?>
   <form method="post">
        <label for=table">Select another value to change?</label>
        <select name="orgs" id="table">
	   <option value="orgName">Name</option>
	   <option value="colors">Event Date</option>
	   <option value="type">Event Location</option>
	   <option value="quota">Event Time</option>
	   <option value="dues">Dues</option>
	   <option value="members">Num Members</option>
	   <option value="motto">Motto</option>
	   <option value="advEmail">Advisor's Email</option>
	   <option value="philName">Philanthropy</option>
	   <option value="council">Council</option>
        </select>
       <input type="submit" value="Submit"/>
   </form>

   <form method="post">
	Organization Name: <input type="text" name="orgName">
	New Council: <input type="text" name="newCouncil">
	<input type="submit" value="Submit"/>
   </form>

<?php } else if(strcmp($_POST['advisors'], "advName") == 0) { ?>
   <form method="post">
        <label for=table">Select another value to change?</label>
        <select name="advisors" id="table">
	   <option value="advName">Name</option>
	   <option value="advId">ID</option>
	   <option value="dept">Department</option>
	   <option value="email">Email</option>
        </select>
       <input type="submit" value="Submit"/>
   </form>

   <form method="post">
	Advisor Name: <input type="text" name="advName">
	New Advisor: <input type="text" name="newAdv">
	<input type="submit" value="Submit"/>
   </form>

<?php } else if(strcmp($_POST['advisors'], "advId") == 0) { ?>
   <form method="post">
        <label for=table">Select an individual value to change:</label>
        <select name="advisors" id="table">
	   <option value="advName">Name</option>
	   <option value="advId">ID</option>
	   <option value="dept">Department</option>
	   <option value="email">Email</option>
        </select>
       <input type="submit" value="Submit"/>
   </form>

   <form method="post">
	Advisor Email: <input type="text" name="advId">
	New Email: <input type="text" name="newAdvId">
	<input type="submit" value="Submit"/>
   </form>

<?php } else if(strcmp($_POST['advisors'], "dept") == 0) { ?>
   <form method="post">
        <label for=table">Select an individual value to change:</label>
        <select name="advisors" id="table">
	   <option value="advName">Name</option>
	   <option value="advId">ID</option>
	   <option value="dept">Department</option>
	   <option value="email">Email</option>
        </select>
       <input type="submit" value="Submit"/>
   </form>

   <form method="post">
	Advisor Name: <input type="text" name="advName">
	New Department: <input type="text" name="newDept">
	<input type="submit" value="Submit"/>
   </form>

<?php } else if(strcmp($_POST['advisors'], "advisorEmail") == 0) { ?>
   <form method="post">
        <label for=table">Select an individual value to change:</label>
        <select name="advisors" id="table">
	   <option value="advName">Name</option>
	   <option value="advId">ID</option>
	   <option value="dept">Department</option>
	   <option value="advisorEmail">Email</option>
        </select>
       <input type="submit" value="Submit"/>
   </form>

   <form method="post">
	Advisor Name: <input type="text" name="advName">
	New Email: <input type="text" name="newAEmail">
	<input type="submit" value="Submit"/>
   </form>

<?php } else if(strcmp($_POST['pnms'], "pId") == 0) { ?>
   <form method="post">
        <label for=table">Select an individual value to change:</label>
        <select name="pnms" id="table">
	   <option value="pId">ID</option>
	   <option value="pName">Name</option>
        </select>
       <input type="submit" value="Submit"/>
   </form>

   <form method="post">
	Potential New Member ID: <input type="text" name="pId">
	New ID: <input type="text" name="newPId">
	<input type="submit" value="Submit"/>
   </form>

<?php } else if(strcmp($_POST['pnms'], "pName") == 0) { ?>
   <form method="post">
        <label for=table">Select an individual value to change:</label>
        <select name="pnms" id="table">
	   <option value="pId">ID</option>
	   <option value="pName">Name</option>
        </select>
       <input type="submit" value="Submit"/>
   </form>

   <form method="post">
	Potential New Member Name: <input type="text" name="pName">
	New Name: <input type="text" name="newPName">
	<input type="submit" value="Submit"/>
   </form>
<?php } else if(strcmp($_POST['phils'], "philName2") == 0) { ?>
   <form method="post">
	Philanthropy Name: <input type="text" name="philName2">
	Updated Name: <input type="text" name="newPhil">
	<input type="submit" value="Submit">
   </form>
<?php } else if(strcmp($_POST['phils'], "donations") == 0) { ?>
   <form method="post">
	Philanthropy: <input type="text" name="philName3">
	Current Donations (USD): $<input type="text" name="donations">
	Updated Donations (USD): $<input type="text" name="newDonations">
	<input type="submit" value="Submit">
   </form>
<?php } else if(strcmp($_POST['corps'], "corpName") == 0) { ?>
   <form method="post">
	Corp Name: <input type="text" name="corpName">
	New Corp Name: <input type="text" name="newCorp">
	<input type="submit" value="Submit">
   </form>
<?php } else if(strcmp($_POST['corps'], "service") == 0) { ?>
   <form method="post">
	Corp Name: <input type="text" name="corpName2">
	Service Type: <input type="text" name="service">
	Updated Service Type: <input type="text" name="newService">
	<input type="submit" value="Submit">
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

   if(isset($_POST['orgName'])) {
	$curr = $_POST['orgName'];
	$new = $_POST['newOrg'];
	echo "<script>alert('$curr')</script>";
	$query = "select * from Organizations where name = '$curr'";
	$r = mysqli_query($connection, $query);
	if($r) {
		$dat = mysqli_fetch_assoc($r);
		if(count($dat) != 0) {
			echo 'Tuple Exists!';
			$query = "update Organizations set name = '$new' where name = '$curr'";
			$update = mysqli_query($connection, $query);
		} else {
			echo 'Update Failure: Event does not exist!';
		}
	} else {
		echo 'Update Failure: Critical Error';
	}
   } else if(isset($_POST['colors'])) {	
	$new = $_POST['newColors'];
	$name = $_POST['orgName'];
	echo "<script>alert('$new')</script>";
	$query = "select * from Organizations where name = '$name'";
	$r = mysqli_query($connection, $query);
	if($r) {
		$dat = mysqli_fetch_assoc($r);
		if(count($dat) != 0) {
			echo 'Tuple Exists!';
			$query = "update Organizations set colors = '$new' where name = '$name'";
			$update = mysqli_query($connection, $query);
		} else {
			echo 'Update Failure: Event does not exist!';
		}
	} else {
		echo 'Update Failure: Critical Error';
	}
   } else if(isset($_POST['type'])) {	
	$name = $_POST['orgName'];
	$new = $_POST['newType'];
	echo "<script>alert('$new')</script>";
	$query = "select * from Organizations where name = '$name'";
	$r = mysqli_query($connection, $query);
	if($r) {
		$dat = mysqli_fetch_assoc($r);
		if(count($dat) != 0) {
			echo 'Tuple Exists!';
			$query = "update Organizations set type = '$new' where name = '$name'";
			$update = mysqli_query($connection, $query);
		} else {
			echo 'Update Failure: Event does not exist!';
		}
	} else {
		echo 'Update Failure: Critical Error';
	}
   } else if(isset($_POST['quota'])) {	
	$name = $_POST['orgName'];
	$new = $_POST['newQuota'];
	echo "<script>alert('$new')</script>";
	$query = "select * from Organizations where name = '$name'";
	$r = mysqli_query($connection, $query);
	if($r) {
		$dat = mysqli_fetch_assoc($r);
		if(count($dat) != 0) {
			echo 'Tuple Exists!';
			$query = "update Organizations set quota = '$new' where name = '$name'";
			$update = mysqli_query($connection, $query);
		} else {
			echo 'Update Failure: Event does not exist!';
		}
	} else {
		echo 'Update Failure: Critical Error';
	}
   } else if(isset($_POST['dues'])) {
	$name = $_POST['orgName'];
	$new = $_POST['newDues'];
	echo "<script>alert('$new')</script>";
	$query = "select * from Organizations where name = '$name'";
	$r = mysqli_query($connection, $query);
	if($r) {
		$dat = mysqli_fetch_assoc($r);
		if(count($dat) != 0) {
			echo 'Tuple Exists!';
			$query = "update Organizations set dues = '$new' where name = '$name'";
			$update = mysqli_query($connection, $query);
		} else {
			echo 'Update Failure: Event does not exist!';
		}
	} else {
		echo 'Update Failure: Critical Error';
	}
   } else if(isset($_POST['members'])) {
	$name = $_POST['orgName'];
	$new = $_POST['newName'];
	echo "<script>alert('$curr')</script>";
	$query = "select * from Organizations where name = '$name'";
	$r = mysqli_query($connection, $query);
	if($r) {
		$dat = mysqli_fetch_assoc($r);
		if(count($dat) != 0) {
			echo 'Tuple Exists!';
			$query = "update Organizations set name = '$new' where name = '$curr'";
			$update = mysqli_query($connection, $query);
		} else {
			echo 'Update Failure: Event does not exist!';
		}
	} else {
		echo 'Update Failure: Critical Error';
	}
   } else if(isset($_POST['motto'])) {
	$name = $_POST['orgName'];
	$new = $_POST['newMotto'];
	echo "<script>alert('$new')</script>";
	$query = "select * from Organizations where name = '$name'";
	$r = mysqli_query($connection, $query);
	if($r) {
		$dat = mysqli_fetch_assoc($r);
		if(count($dat) != 0) {
			echo 'Tuple Exists!';
			$query = "update Organizations set motto = '$new' where name = '$name'";
			$update = mysqli_query($connection, $query);
		} else {
			echo 'Update Failure: Event does not exist!';
		}
	} else {
		echo 'Update Failure: Critical Error';
	}
   } else if(isset($_POST['advEmail'])) {
	$name = $_POST['orgName'];
	$new = $_POST['newEmail'];
	$query = "select * from Organizations where name = '$name'";
	$r = mysqli_query($connection, $query);
	if($r) {
		$dat = mysqli_fetch_assoc($r);
		if(count($dat) != 0) {
			echo 'Tuple Exists!';
			$query = "update Organizations set advEmail = '$new' where name = '$name'";
			$update = mysqli_query($connection, $query);
		} else {
			echo 'Update Failure: Event does not exist!';
		}
	} else {
		echo 'Update Failure: Critical Error';
	}
   } else if(isset($_POST['philName'])) {
	$name = $_POST['orgName'];
	$new = $_POST['newPhil'];
	$query = "select * from Organizations where name = '$name'";
	$r = mysqli_query($connection, $query);
	if($r) {
		$dat = mysqli_fetch_assoc($r);
		if(count($dat) != 0) {
			echo 'Tuple Exists!';
			$query = "update Organizations set philName = '$new' where name = '$curr'";
			$update = mysqli_query($connection, $query);
		} else {
			echo 'Update Failure: Event does not exist!';
		}
	} else {
		echo 'Update Failure: Critical Error';
	}
   } else if(isset($_POST['council'])) {
	$curr = $_POST['orgName'];
	$new = $_POST['newCouncil'];
	$query = "select * from Organizations where name = '$name'";
	$r = mysqli_query($connection, $query);
	if($r) {
		$dat = mysqli_fetch_assoc($r);
		if(count($dat) != 0) {
			echo 'Tuple Exists!';
			$query = "update Organizations set councilName = '$new' where name = '$name'";
			$update = mysqli_query($connection, $query);
		} else {
			echo 'Update Failure: Event does not exist!';
		}
	} else {
		echo 'Update Failure: Critical Error';
	}
   }

   if(isset($_POST['advName'])) {
	$curr = $_POST['advName'];
	$new = $_POST['newAdv'];
	$query = "select * from Advisor where name = '$curr'";
	$r = mysqli_query($connection, $query);
	if($r) {
		$dat = mysqli_fetch_assoc($r);
		if(count($dat) != 0) {
			echo 'Tuple Exists!';
			$query = "update Advisor set name = '$new' where name = '$curr'";
			$update = mysqli_query($connection, $query);
		} else {
			echo 'Update Failure: Advisor does not exist!';
		}
	} else {
		echo 'Update Failure: Critical Error';
	}
   } else if(isset($_POST['advId'])) {
	$curr = $_POST['advId'];
	$new = $_POST['newAdvId'];
	$query = "select * from Advisor where id = '$curr'";
	$r = mysqli_query($connection, $query);
	if($r) {
		$dat = mysqli_fetch_assoc($r);
		if(count($dat) != 0) {
			echo 'Tuple Exists!';
			$query = "update Advisor set id = '$new' where id = '$curr'";
			$update = mysqli_query($connection, $query);
		} else {
			echo 'Update Failure: Advisor does not exist!';
		}
	} else {
		echo 'Update Failure: Critical Error';
	}
    } else if(isset($_POST['dept'])) { 
	$name = $_POST['advName'];
	$new = $_POST['newDept'];
	$query = "select * from Advisor where name = '$name'";
	$r = mysqli_query($connection, $query);
	if($r) {
		$dat = mysqli_fetch_assoc($r);
		if(count($dat) != 0) {
			echo 'Tuple Exists!';
			$query = "update Advisor set dept = '$new' where name = '$name'";
			$update = mysqli_query($connection, $query);
		} else {
			echo 'Update Failure: Advisor does not exist!';
		}
	} else {
		echo 'Update Failure: Critical Error';
	}
   } else if(isset($_POST['advisorEmail'])) {
	$name = $_POST['advName'];
	$new = $_POST['newAEmail'];
	$query = "select * from Advisor where name = '$name'";
	$r = mysqli_query($connection, $query);
	if($r) {
		$dat = mysqli_fetch_assoc($r);
		echo $query;
		if(count($dat) != 0) {
			echo 'Tuple Exists!';
			$query = "update Advisor set email = '$new' where name = '$name'";
			echo $query;
			$update = mysqli_query($connection, $query);
		} else {
			echo 'Update Failure: Advisor does not exist!';
		}
	} else {
		echo 'Update Failure: Critical Error';
	}
   } else if(isset($_POST['pId'])) {
	$curr = $_POST['pId'];
	$new = $_POST['newPId'];
	$query = "select * from PNMs where id = '$curr'";
	$r = mysqli_query($connection, $query);
	if($r) {
		$dat = mysqli_fetch_assoc($r);
		if(count($dat) != 0) {
			echo 'Tuple Exists!';
			$query = "update PNMs set id = '$new' where id = '$curr'";
			$update = mysqli_query($connection, $query);
		} else {
			echo 'Update Failure: PNM does not exist!';
		}
	} else {
		echo 'Update Failure: Critical Error';
	}
   } else if(isset($_POST['pName'])) {	
	$curr = $_POST['pName'];
	$new = $_POST['newPName'];
	$query = "select * from PNMs where name = '$curr'";
	$r = mysqli_query($connection, $query);
	if($r) {
		$dat = mysqli_fetch_assoc($r);
		if(count($dat) != 0) {
			echo 'Tuple Exists!';
			$query = "update PNMs set name = '$new' where name = '$curr'";
			$update = mysqli_query($connection, $query);
		} else {
			echo 'Update Failure: PNM does not exist!';
		}
	} else {
		echo 'Update Failure: Critical Error';
	}
   }

   if(isset($_POST['philName2'])) {
	$curr = $_POST['philName2'];
	$new = $_POST['newPhil'];
	$query = "select * from Philanthropy where name = '$curr'";
	$r = mysqli_query($connection, $query);
	if($r) {
		$dat = mysqli_fetch_assoc($r);
		if(count($dat) != 0) {
			echo 'Tuple Exists!';
			$query = "update Philanthropy set name = '$new' where name = '$curr'";
			$update = mysqli_query($connection, $query);
		} else {
			echo 'Update Failure: Philanthropy does not exist!';
		}
	} else {
		echo 'Update Failure: Critical Error';
	}
   } else if(isset($_POST['donations'])) {
	$curr = $_POST['donations'];
	$new = $_POST['newDonations'];
	$name = $_POST['philName3'];

	$query = "select * from Philanthropy where name = '$name'";
	#echo $query;
	$r = mysqli_query($connection, $query);
	if($r) {
		$dat = mysqli_fetch_assoc($r);
		echo $dat;
		if(count($dat) != 0) {
			echo 'Tuple exists!';
			$query = "update Philanthropy set donations = '$new' where donations = '$curr'";
			$update = mysqli_query($connection, $query);
		} else {
			echo 'Update Failure: Philanthropy does not exist!';
		}
	} else {
		echo 'Update Failure: Critical Error';
	}
   }

   if(isset($_POST['cName'])) {
	$curr = $_POST['cName'];
	$new = $_POST['newCouncilName'];

	$query = "select * from Councils where name = '$curr'";
	$r = mysqli_query($connection, $query);
	if($r) {
		$dat = mysqli_fetch_assoc($r);
		if(count($dat) != 0) {
			echo 'Tuple Exists!';
			$query = "update Councils set name = '$new' where name = '$curr'";
			$update = mysqli_query($connection, $query);
		} else {
			echo 'Update Failure: Council does not exist!';
		}
	} else {
		echo 'Update Failure: Critical Failure';
	}
   }

  if(isset($_POST['corpName'])) {
	$curr = $_POST['corpName'];
	$new = $_POST['newCorp'];
	$option = $_POST['service'];
	$newoption = $_POST['newService'];

	$query = "select * from Corporation where name = '$curr'";
	$r = mysqli_query($connection, $query);
	if($r) {
		$dat = mysqli_fetch_assoc($r);
		if(count($dat) != 0) {
			echo 'Tuple Exists!';
			$query = "update Corporation set name = '$new' where name = '$curr'";
			$update = mysqli_query($connection, $query);
		} else {
			echo 'Update Failure: Council does not exist!';
		}
	} else {
		echo 'Update Failure: Critical Failure';
	}
   } else if(isset($_POST['service'])) {
	$curr = $_POST['service'];
	$new = $_POST['newService'];
	$name = $_POST['corpName2'];
	
	$query = "select * from Corporation where name = '$name'";
	$r = mysqli_query($connection, $query);
	if($r) {
		$dat = mysqli_fetch_assoc($r);
		if(count($dat) != 0) {
			echo 'Tuple Exists';
			$query = "update Corporation set service_type = '$new' where service_type = '$curr' and name = '$name'";
			$update = mysqli_query($connection, $query);
		} else {
			echo 'Update Failure: Corporation does not exist';
		}
	} else {
		echo 'Update Failure: Critical Failure';
	}
   }
?>		
</body>
</html> 
