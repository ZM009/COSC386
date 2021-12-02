<!DOCTYPE HTML>
<html>
<head>
<title> Students of Frat </title>
<style>
h2{
text-decoration: underline;
}

.center{
text-align: center;
}

table, th{
border: 1px solid white;
}

th{
background-color: white;
color: black;
}
tr{
background-color: #F5B7B1;
color: black;
}
</style>
</head>

<body>

<?php
include 'menu.php';
?>

<?php
$org = $_POST["orgStudent"];
$connect = @mysqli_connect('localhost','wjenkins2','wjenkins2','SUGreekLifeDB');

$query = "select name, id, volunteer_hrs, email from Students where orgName = (select name from Organizations where name = '$org') ";

$r = mysqli_query($connect, $query);

echo "<div class = 'center'>";
echo "<h2>Students from " . $org . "<br></h2>";
echo "</div>";

echo "<table border = 1 style='margin-left:auto;margin-right:auto;'>";
echo "<tr>";
echo "<th> Name </th>";
echo "<th> Student ID </th>";
echo "<th> Hours Volunteered </th>";
echo "<th> Email </th>";
echo "</tr>";

while($row = mysqli_fetch_array($r)){
	echo "<tr>";
	echo "<td>" . $row['name'] . "</td>";
	echo "<td>" . $row['id'] . "</td>";
	echo "<td>" . $row['volunteer_hrs'] . "</td>";
	echo "<td>" . $row['email'] . "</td>";
	echo "</tr>";
}

echo "</table>";

?>

</body>

</html>
