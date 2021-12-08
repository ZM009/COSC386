<!DOCTYPE HTML>
<html>

<head>
<title> Greek Life Database </title>

<style>
        .sidenav {
  height: 100%;
  width: 240px;
  position: fixed;
  z-index: 1;
margin-top: 49px;
  top: 0;
  left: 0;
  background-color: #111;
  overflow-x: hidden;
  padding-top: 20px;
text-align: center;
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
                for($i = 1; $i <= $a+1; $i++){
                        $row = mysqli_fetch_array($ra);
                        #echo $row["councilName"];
                        #echo "<br>";
                        if($s == $i){
                                $answer = $row["councilName"];
                                #echo $answer;
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
<br> <br>

<div class="sidenav">

<p> Today's Date is </p>
<?php
 echo  date("m-d-Y");
 $dat = date("Y-m-d");

#parse through all event data and create dates
?>

<p> All upcoming events </p>

<?php

$query = "select date, name from Events order by date";
$ro = mysqli_query($connect,$query);

echo "<br>";

 echo "<table>";
        #echo "<tr>"
        echo "<th> Name </th>";
        echo "<th> Date </th>";
       # echo "</tr>";


while($raw = mysqli_fetch_array($ro)){
        $counter =0;
        $index =0;
        $datEvent = $raw['date'];
        $nameEvent = $raw['name'];

        str_replace("/","-",$datEvent);
        $str = explode ("-",$datEvent);

        $arr = array($str[2],$str[0],$str[1]);

        $newDate = implode("-",$arr);
        if($dat < $newDate){
                echo "<tr style='height:30px;'>";
                echo "<td style='text-align:left;'> " . $nameEvent . "</td>";
                echo "<td>" . $datEvent . "</td>";
                #echo $nameEvent . ": " .  $datEvent;
                echo "</tr>";
        #       echo "<br> <br>";
        }
}
echo "</table>";
?>
<br>
<p> Quick Statistics </p>

<?php

$query = "select avg(dues) from Organizations";
$r = mysqli_query($connect,$query);
$raw = mysqli_fetch_array($r);

echo "The average monthly dues are: $" . $raw[0];
echo "<br><br>";
        
$query = "select count(name), count(distinct orgName) from Students";
#echo $query;
$r = mysqli_query($connect,$query);
$raw = mysqli_fetch_array($r);

if(count($raw) != 0) {
        echo "There are on average ". $raw[0]/$raw[1] . " students in each Organization.";
        echo "<br><br>";
} else {
        echo "We have organizations";
}

$query = "select avg(volunteer_hrs) from Students";
$r = mysqli_query($connect,$query);
$raw = mysqli_fetch_array($r);

echo "Each student has about " . $raw[0] . " volunteer hours.";
?>

</div>


</body>
</html>
                               

