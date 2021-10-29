<!DOCTYPE HTML>
<html>
<head>
<title> Students of Frat </title>
</head>

<body>


<?php
$org = $_POST["orgStudent"];
$connect = @mysqli_connect('localhost','wjenkins2','wjenkins2','SUGreekLifeDB');

$query = "select name, id, volunteer_hrs from Students where orgName = (select name from Organizations where name = '$org') ";

$r = mysqli_query($connect, $query);

echo "<table border = 1 style='margin-left:auto;margin-right:auto;'>";
echo "<tr>";
echo "<th> Name </th>";
echo "<th> Student ID </th>";
echo "<th> Hours Volunteered </th>";
echo "</tr>";

while($row = mysqli_fetch_array($r)){
	echo "<tr>";
	echo "<td>" . $row['name'] . "</td>";
	echo "<td>" . $row['id'] . "</td>";
	echo "<td>" . $row['volunteer_hrs'] . "</td>";
	echo "</tr>";
}

echo "</table>";

?>

</body>

</html>
