<!DOCTYPE HTML>
<html>
<head>
<title> Events Held By Frat </title>
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

$org = $_POST["eventOrg"];
$connect = @mysqli_connect('localhost','wjenkins2','wjenkins2','SUGreekLifeDB');

echo "$query";

$query = "select * from held_by where orgName = '$org' ";

$r = mysqli_query($connect, $query);

echo "<div class = 'center'>";
echo "<h2>Events held by " . $org . "<br></h2>";
echo "</div>";


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
