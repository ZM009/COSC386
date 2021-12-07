<!DOCTYPE HTML>
<html>

<head>
<title> Greek Life Database </title>

<style>

        .label{
        text-align: left;

        }

</style>

</head>

<body>
<div style="text-align:center;">
<?php include 'menu.php';
#include("https://lamp.salisbury.edu/~adepace1/menu.php");

$a = 0;
$s =0;

?>
<br>

<!-- <div class="center"> --!>

<div style="border: 2px solid black;">
<div style="float:left; margin-left:20%;">
<h2> Lists Of Councils At Salisbury </h2>
<form action="" method="POST">

<div style="text-align:left;margin-left:30px;">
<?php
$connect = @mysqli_connect('localhost','wjenkins2','wjenkins2','SUGreekLifeDB');
$query = "select distinct name from Councils";
$r = mysqli_query($connect,$query);
while($row = mysqli_fetch_array($r)){
                $a = $a +1;
                echo "<input type='radio' name='councilSelect' id=" . $a . " value=" . $a  . ">";
                echo"<label for=" . $a .">" . $row['name'] . "</label>";
                echo"<br>";
}
#echo "<div style='text-align:center;'>";
        echo"<input type='submit' value='Select Council' style='margin-left:20%;'>";
#echo "</div>;"
$s = $_POST["councilSelect"];
?>
</form>
</div>
</div>

<div style="float:none;">
<?php
if($s==0){
        #echo"NOT SELECTED";
}else{
        $query= "select distinct councilName from Organizations";

        $ra = mysqli_query($connect,$query);
                for($i = 1; $i <= $a; $i++){
                        $row = mysqli_fetch_array($ra);
                        if($s == $i){
                                $answer = $row["councilName"];
                                }
                        }

        #echo"<br>";
        echo "<h2 style='color:white;'>You have selected " . $answer . "</h2>";
        echo "<h4 style='color:white;'> Organizations Apart of This Fraternity/Sorority </h4>";

        $newQuery ="select * from Organizations where councilName = '$answer'";
        $ro = mysqli_query($connect,$newQuery);
        echo "<table border=1 style='margin:auto;'>";
        echo "<th> Name </th>";
        echo "<th> Type </th>";
                while($row = mysqli_fetch_array($ro)){
                        echo"<tr>";
                        echo "<td style='color:white;'>  <a href='https://lamp.salisbury.edu/~wjenkins2/orgDisplay.php?varname=". $row['name'] . "'>" . $row['name'] . "</td>"; #displays all organizations of that council
                        echo "<td style='color:white;'>" . $row['type'] . "</td>";

                        echo "</tr>";
                        }
        echo "</table>";
}
?>
</div>
</div>
</body>
</html>
                                             one;">
