<!DOCTYPE HTML>
<html>
<head>
<title> Events Held By Frat </title>
</head>

<body>

<button style="text-align:left;" type="button" onclick="window.location.href='https://lamp.salisbury.edu/~wjenkins2/homeSite.php';"> Home </button>

<?php
$org = $_POST["eventOrg"];
$connect = @mysqli_connect('localhost','wjenkins2','wjenkins2','SUGreekLifeDB');

echo "$query";

$query = "select * from held_by where orgName = '$org' ";

$r = mysqli_query($connect, $query);

echo "<table border = 1 style='margin-left:auto;margin-right:auto;'>";
echo "<tr>";
echo "<th> Event </th>";
echo "<th> Date </th>";
echo "<th> Location</th>";
echo "<th> Organization </th>";
echo "</tr>";

while($row = mysqli_fetch_array($r)){
        echo "<tr>";
	for($i =0;$i < sizeof($row)/2;$i++)
		echo "<td>" . $row[$i] . "</td>";

        echo "</tr>";
}

echo "</table>";

?>

</body>

</html>
~              
