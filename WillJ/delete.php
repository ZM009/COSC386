<!DOCTYPE HTML>
<html>

<head>
<title> Deletion Page </title>
</head>

<?php
include 'menu.php';
?>
<br> <br>
<h1> Deletion </h1>
<div>

<p> Select what value you woud like to delete </p>
<form action="deleteAction.php" method="POST">
  <label for="table">Select what to delete:</label>
  <select name="tableName" id="table">
    <option value="Students">Students</option>
    <option value="Events">Events</option>
    <option value="OrgName">Organizations</option>
    <option value="Advisor">Advisor</option>
    <option value="PNMS"> Potential New Members</option>
    <option value="Corporation">Corporation</option>
  </select>
  <br><br>
  <input type="submit" value="Submit">
</form>
</div>
</html>
