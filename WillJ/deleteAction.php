
<!DOCTYPE HTML>
<html>
<head>
<title> Delete Action </title>
</head>


<body>
<?php
include 'menu.php';
$connect = @mysqli_connect('localhost','wjenkins2','wjenkins2','SUGreekLifeDB');
$tableN = $_POST['tableName'];

if(strcmp($tableN,"Students") == 0){
        echo "You have chosen to delete a Student ";
?>
<form action="" method="POST">
Student ID: <input type="text" name="studID">
<input type="submit" value ="Submit">
</form>

<?php
}else if(strcmp($tableN,"Events") == 0){
        echo "You have chosen to delete an Event ";
?>
        <form action="" method="POST">
Name of Event: <input type="text" name="nameEvent">
Date: <input type="text" name="nameDate">
<input type="submit" value ="Submit">
</form>

<?php
}else if(strcmp($tableN,"OrgName") == 0){
        echo "You have chosen to delete an Organization ";
?>
  <form action="" method="POST">
Name of Organization: <input type="text" name="nameOrg">
<input type="submit" value ="Submit">
</form>

<?php
}else if(strcmp($tableN,"Advisor") == 0){
        echo "You have chosen to delete an Advisor ";
?>

<form action="" method="POST">
Email: <input type="text" name="emailID">
<input type="submit" value ="Submit">
</form>


<?php
}else if(strcmp($tableN,"PNMS") == 0){
        echo "You have chosen to delete a Potential New Member ";
?>


<form action="" method="POST">
Potential New Member ID: <input type="text" name="PNMID">
<input type="submit" value ="Submit">
</form>

<?php
}else if(strcmp($tableN,"Corporation") ==0){
        echo "You have chosen to delete a Corporation";
?>

<form action="" method="POST">
Corporation Name: <input type="text" name="corpName">
<input type="submit" value ="Submit">
</form>


<?php
}
?>

<h1> Deleting Data </h1>

<?php
if(isset($_POST['studID'])){ //check if form was submitted for students
        $studentID = $_POST["studID"];
        echo $studentID;
        $query = "select * from Students where id = '$studentID' limit 1";
        $r =mysqli_query($connect,$query);
        if($r) {
                $dat = mysqli_fetch_assoc($r);;
                if(count($dat) != 0){
                        echo "One tuple exists... deleting";
                        $query = "delete from Students where id = '$studentID'";
                        $del = mysqli_query($connect,$query);
                }else{
                        echo "Delete Failed";
                }#end of testing if one count exists
        }else{
                echo "Deleted Failed";
        }
}else if(isset($_POST['nameEvent']) &&($_POST['nameDate'])){ #check if form was submitted for events
        $nameID = $_POST['nameEvent'];
        echo $nameID;
        $dateID = $_POST['nameDate'];
        echo $dateID;

        $query = "select * from Events where name = '$nameID' and date = '$dateID' limit 1";
        $r =mysqli_query($connect,$query);
  if($r) {
                $dat = mysqli_fetch_assoc($r);;
                if(count($dat) != 0){
                        echo "One tuple exists... deleting";
                $query = "delete from Events where name = '$nameID' and date = '$dateID' limit 1";
                $r = mysqli_query($connect, $query);
                 $del = mysqli_query($connect,$query);
        }else{
                echo "Delete Failed";}
        }else{
                echo "Deleted Failed";
        }
}else if(isset($_POST['nameOrg'])){#post checks if form submitted for organization

        $orgNameID = $_POST["nameOrg"];
        echo $orgNameID;
        $query = "select * from Organizations where name = '$orgNameID' limit 1";
        $r =mysqli_query($connect,$query);
        if($r) {
                $dat = mysqli_fetch_assoc($r);
                if(count($dat) != 0){
                        echo "One tuple exists... deleting";
                        $query = "delete from Organizations where name = '$orgNameID'";
                        $del = mysqli_query($connect,$query);
                }else{
                        echo "Delete Failed";
                }#end of testing if one count exists
        }else{
                echo "Deleted Failed";
        }
}else if(isset($_POST["emailID"])){
        $emailID = $_POST["emailID"];
        echo $emailID;
        $query = "select * from Advisor where email = '$emailID' limit 1";
        $r =mysqli_query($connect,$query);
        if($r) {
                $dat = mysqli_fetch_assoc($r);
                if(count($dat) != 0){
                        echo "One tuple exists... deleting";
                        $query = "delete from Advisor where email = '$emailID'";
                        $del = mysqli_query($connect,$query);
                }else{
                        echo "Delete Failed";
                }#end of testing if one count exists
        }else{
                echo "Deleted Failed";
        }
}else if(isset($_POST["PNMID"])){
        $pnmID = $_POST["PNMID"];
        echo $pnmID;
        $query = "select * from PNMs where id = '$pnmID' limit 1";
        $r =mysqli_query($connect,$query);
        if($r) {
                $dat = mysqli_fetch_assoc($r);
if(count($dat) != 0){
                        echo "One tuple exists... deleting";
                        $query = "delete from PNMs where id = '$pnmID'";
                        $del = mysqli_query($connect,$query);
                }else{
                        echo "Delete Failed";
                }#end of testing if one count exists
        }else{
                echo "Deleted Failed";
        }
}else if(isset($_POST["corpName"])){
        $corpN = $_POST["corpName"];
        echo $corpN;
        $query = "select * from Corporation where name = '$corpN' limit 1";
        $r =mysqli_query($connect,$query);
        if($r) {
                $dat = mysqli_fetch_assoc($r);
                if(count($dat) != 0){
                        echo "One tuple exists... deleting";
                        $query = "delete from Corporation where name = '$corpN'";
                        $del = mysqli_query($connect,$query);
                }else{
                        echo "Delete Failed";
                }#end of testing if one count exists
        }else{
                echo "Deleted Failed";
        }
}
?>


</body>
</html>
                                        
