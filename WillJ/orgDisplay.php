<!DOCTYPE HTML>
<html>
<head>
<style>

        .right{
        float:right;
        margin-right:15%;
        padding-top: 0px;

        }

   .sidenav {
color:white;
border: 4px solid #d4af37;
  height: 100%;
  width: 280px;
  position: fixed;
  z-index: 1;
margin-top: 23%;
  top: 0;
  left: 0;
  background-color: black;
  overflow-x: hidden;
  padding-top: 10px;
 padding-right: 15px;
text-align: center;
}

.middle{
        float:left;
        margin-left: 20%;


}



.memberDisplay{
        background-color: #d4af37;
        float:left;
        width:26%;
        color:white;
        height:300px;
}


.info{
        color: white;
        background-color: #d4af37;
        float: left;
        width: 35%;
        height: 300px;
        }

.lastSide{
    width:45%;
        background-color: #d4af37;
        float: left;
        height: 300px;
        color:white;
}

h2{
        text-align:center;

        }

</style>
</head>

<body>

<?php
#this retrieves the value and displays name and motto
$var_value = $_GET['varname'];
include 'menu.php';
$connect = @mysqli_connect('localhost','wjenkins2','wjenkins2','SUGreekLifeDB');
$query = "select * from Organizations where name ='$var_value'";


$r = mysqli_query($connect,$query);
$row = mysqli_fetch_array($r);
$due = $row['dues'];
echo "<h1>" . $var_value . "</h1>";

echo"<h2>'". $row['motto']  ."' </h2>";
?>

<div class="sidenav">

<p> We are a: </p>
<?php echo "<h4> " . $row['type'] . "</h4>"; ?>

<p> We sponsor the Philanthropy:  </p>
<?php echo "<h4> " . $row['philName'] . " </h4>"; ?>

<?php

$query = "select * from works_with where orgName = '". $row['name'] . "'" ;
$rComp = mysqli_query($connect,$query);
$rowComp = mysqli_fetch_array($rComp);

if(mysqli_num_rows($rComp) != 0){#no company supporting

echo "<p> We Work With: </p>";
echo "<h4> " . $rowComp['corpName'] . "</h4>";

}else{

echo "<p>We do not currently work with any Company! </p>";
}

echo "<p>The Monthly Dues Are: </p>";
echo "<h4> $" . $row['dues'] . ".00</h4>";

echo "<p> Semester Required Volunteer Hours </p>";
echo "<h4> " . $row['quota'] . " Hours</h4>";

?>

</div>

<div class="middle">

<h3> The Advisor For <?php echo $row['name']; ?>  </h3>
<?php

$query = "select * from Advisor where email = '" . $row['advEmail'] . "'";
$advName = mysqli_query($connect,$query);
$adRow = mysqli_fetch_array($advName);


if(mysqli_num_rows($adRow) == 0){#no company supporting

        echo "<h4> Name:" . $adRow['name'] . "</h4>";
        echo "<h4> Dept: " . $adRow['dept'] . "</h4>";
        echo "<h4> Email: " . $adRow['email'] . "</h4>";
}else{

echo "<p>We do not currently have a Advisor! </p>";
}
echo "<br>";
echo "<h3> The Officers Of " . $row['name']  . "</h3>";
$query = "select name, position, years_held from governing_body, Students where governing_body.orgName= '$var_value' and Students.id = governing_body.id";
$govAtt = mysqli_query($connect,$query);
$govRow = mysqli_fetch_array($govAtt);
#echo $govRow[0];
if(mysqli_num_rows($govRow) == 0 && $govRow){#no company supporting

        echo "<h4> Posistion: " . $govRow['position'] . "</h4>";
        echo "<h4> Name: " . $govRow['name'] . "</h4>";
        echo "<h4> Years Held: " . $govRow['years_held'] . "</h4>";
}else{

echo "<p>We do not currently have a Governing Body! </p>";
}
echo "<br>";
echo "<h3> The members " . $row['name'] . " </h3>";
$query = "select * from Students where orgName = '$var_value' ";
$studR = mysqli_query($connect, $query);
if(mysqli_num_rows($studR) == 0){
echo "<h3> There are no members in this Organization! </h3>";
}else{
while($rowS = mysqli_fetch_array($studR)){
        echo "<h3> Name: " . $rowS['name'] . "<br> Volunteer Hours: " . $rowS['volunteer_hrs'] . "</h3>";
        echo "<br>";
        }
}
?>
</div>

<div class="right">
<?php
echo "<h3> All Events For " . $row['name'] . " </h3>";
$query = "select eventName, eventDate, eventLocation from held_by where orgName = '$var_value'";
#echo $query;
$rowE = mysqli_query($connect, $query);
#echo $query;
if(mysqli_num_rows($r) == 0){
        echo "<h2> There are no events for " . $var_value . ". </h2>";
}else{
        while($row = mysqli_fetch_array($rowE)){
                echo "<h3> Event Name: " . $row['eventName'] . "<br> Event Date: " . $row['eventDate'] . "<br>Event Location: " . $row['eventLocation'] . "</h3>";
                echo "<br>";
                }
        echo "<br>";
}
?>
</div>
<img src="https://www.thepearlpost.com/wp-content/uploads/2019/05/greek-lifs-visual-900x707.jpg" style="height:500px;width:700px;border-radius: 50%">

</body>
</html>
