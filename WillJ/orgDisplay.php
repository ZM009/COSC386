<!DOCTYPE HTML>
<html>
<head>
<style>
.memberDisplay{
        background-color: #d4af37;
        float:left;
        width:26%;
        color:white;
        height:auto;
}


.info{
        color: white;
        background-color: #d4af37;
        float: left;
        width: 70%;
        height: auto;
        }

.backColor{
        background-color:black;

        }

</style>
</head>

<body>

 <?php
$var_value = $_GET['varname'];
include 'menu.php';

echo "<h1>" . $var_value . "</h1>";
?>

<div class="memberDisplay">
<h3> Members: </h3>
<?php
$connect = @mysqli_connect('localhost','wjenkins2','wjenkins2','SUGreekLifeDB');
$query = "select * from Students where orgName = '$var_value' ";
$r = mysqli_query($connect, $query);
echo "<table style='width:100%;text-align:left;'>";
echo "<th style='height:50px;'> Name </th>";
echo "<th style='height:50px;'> Vlounteer Hours </th>";
while($row = mysqli_fetch_array($r)){
        echo "<tr>";
        echo "<td>" . $row['name'] . "</td>";
        echo "<td>" . $row['volunteer_hrs'] . "</td>";
        echo "</tr>";
}
echo "</table>";
#echo $query;
?>
</div>

<div class="info" style="padding-left:4%;">
<h3> Officers: </h3>
<?php
$connect = @mysqli_connect('localhost','wjenkins2','wjenkins2','SUGreekLifeDB');
$query2 = "select name, position, years_held from governing_body, Students where governing_body.orgName= '$var_value' and Students.id = governing_body.id"; #and governing_body.orgName = Organizations.name";
#echo $query2;
$r = mysqli_query($connect,$query2);
#echo $r;
if(mysqli_num_rows($r) == 0){#no officers
echo "<h2> There are no officers for " . $var_value . ". </h2>";
}else{ 
echo "<table style = 'width: 50%;text-align:left;'>";
echo "<th style='height:50px;'> Name </th>";
echo "<th style='height:50px;'> Position </th>";
echo "<th style='height:50px;'> Years Held </th>";

while($row = mysqli_fetch_array($r)){
        echo "<tr>";
        echo "<td>" . $row['name'] . "</td>";
        echo "<td>" . $row['position'] . "</td>";
        echo "<td>" . $row['years_held'] . "</td>";
        echo "</tr>";
}
echo "</table>";
}
?>
</div>
</body>
</html>
