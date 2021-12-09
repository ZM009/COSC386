<!DOCTYPE HTML>
<html>

<head>

<style>

        select{
        outline:none;
        border-radius: 8px;
        }
        .center{
                text-align: center;
                }
        form{
                float:left;
                margin-left:39%;
                }
        input[type=submit]{
                transition-duration: 0.4s;
                background-color: #d4af37;
                color: white;
                float:right;
                margin-left:10px;
                padding: 4px 20px;
                }

        input[type=submit]:hover {
                 background-color: #4CAF50; /* Green */
                color: white;

                }


</style>

<title> Deletion Page </title>
</head>

<?php
include 'menu.php';
?>
<br> <br>
<h1> Deletion Page </h1>

<div class="center">
<p> Choose one value from the drop down table to delete</p>
</div>
<form action="deleteAction.php" method="POST">
  <label for="table">Select what to delete:</label>
  <select name="tableName" id="table">
    <option value="Students">Students</option>
    <option value="Events">Events</option>
    <option value="OrgName">Organizations</option>
    <option value="Advisor">Advisor</option>
    <option value="PNMS"> Potential New Members</option>
     <option value="Corporation">Corporation</option>
    <option value="Council">Council</option>
    <option value="Philan">Philanthropy</option>
    <option value="users">Users on Database</option>
  </select>
  <input type="submit" value="Submit">
</form>

</html>
