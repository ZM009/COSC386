<!DOCTYPE HTML>
<html>
<head>
 <style>
          select{
        outline:none;
        border-radius: 8px;
        }

        .p2{
                font-size:20px;

                }

         input[type=submit]{
                transition-duration: 0.4s;
                background-color: #d4af37;
                border: 3px solid #d4af37;
                border-radius: 5px;
                color: black;
                padding: 4px 20px;
                }

        input[type=submit]:hover {
                 background-color: #4CAF50; /* Green */
                color: white;
                }
        input[type=text] {
                border: 2px solid black;
        }

        p{
        text-align:center;
        font-size: 24px;
        }

        form{
        margin-top: 15px;
        text-align:center;
        margin-left: 10px;

                }
        table{
        color: white;
        text-align:center;
        margin-right:40%;
        }

        button{
        float:none;
        margin-left:47%;
        }

        .group{
                border: 1px solid black;
        }
 .butt{
        float:left;
        margin-left: 47%;
    -webkit-appearance: button;
    -moz-appearance: button;
    appearance: button;
    text-decoration: none;
    color: black;
                }
        table{
        padding:10px;
        margin-left:auto;
        margin-right:auto;

        }

        th{
        background-color:#d4af37;
        border:1px solid #d4af37;
        border-radius: 10px;
        }

        tr:hover {background-color: black;}

</style>

<title> Delete Action </title>
</head>


<body>

<?php
include 'menu.php';
$connect = @mysqli_connect('localhost','wjenkins2','wjenkins2','SUGreekLifeDB');
$tableN = $_POST['tableName'];

?>
        <h1> Deleting From <br> <?php echo $tableN ?> </h1>
<?php
if(strcmp($tableN,"Students") == 0){
        #echo " <button type='button' onclick= >Click Me!</button> ";
        #echo "<a href =https://lamp.salisbury.edu/~wjenkins2/delete.php?Submit=Delete+Data class='butt'> Go Back </a>";
        echo "<form action = 'https://lamp.salisbury.edu/~wjenkins2/delete.php?Submit=Delete+Data'>";
        echo "<input type = 'submit' value = 'Go Back' />";
        echo "</form>";
        echo "<p>All current Students</p>";
        $query = "select name, id, orgName from Students";
        $r = mysqli_query($connect, $query);
        echo "<table>";
        echo "<th> Name </th>";
        echo "<th> Student ID </th>";
        echo "<th> Organization </th>";
        while ($row = mysqli_fetch_array($r)){
  echo "<tr>";
                echo "<td> " . $row['name'] . "</td>";
                echo "<td> " . $row['id'] . "</td>";
                echo "<td> " . $row['orgName'] . "</td>";
                echo "</tr>";
        }
        echo "</table>";
?>

<form action="" method="POST">
<p class="p2"> Student ID: </p> <input type="text" name="studID">
<input type="submit" value ="Submit">
</form>

<?php
}else if(strcmp($tableN,"Events") == 0){
        # echo "<a href =https://lamp.salisbury.edu/~wjenkins2/delete.php?Submit=Delete+Data class='butt'> Go Back </a>";
         echo "<form action = 'https://lamp.salisbury.edu/~wjenkins2/delete.php?Submit=Delete+Data'>";
        echo "<input type = 'submit' value = 'Go Back' />";
        echo "</form>";
        echo "<p>All current Events</p> <br> ";
        $query = "select * from Events";
        $r = mysqli_query($connect, $query);
        echo "<table>";
        echo "<th> Event Name </th>";
        echo "<th> Date </th>";
        echo "<th> Time </th>";
        echo "<th> Location </th>";
        while ($row = mysqli_fetch_array($r)){
                echo "<tr>";
                echo "<td> " . $row['name'] . "</td>";
                echo "<td> " . $row['date'] . "</td>";
                echo "<td> " . $row['time'] . "</td>";
                echo "<td> " . $row['location'] . "</td>";
                echo "</tr>";
        }
        echo "</table>";

?>
        <form action="" method="POST">
<p class="p2"> Name of Event:</p> <input type="text" name="nameEvent">
<p class="p2">Date:  </p><input type="text" name="nameDate" style="margin-left:95px;">
<input type="submit" value ="Submit">
</form>

<?php
}else if(strcmp($tableN,"OrgName") == 0){
# echo "<a href =https://lamp.salisbury.edu/~wjenkins2/delete.php?Submit=Delete+Data class='butt'> Go Back </a>";
         echo "<form action = 'https://lamp.salisbury.edu/~wjenkins2/delete.php?Submit=Delete+Data'>";
        echo "<input type = 'submit' value = 'Go Back' />";
        echo "</form>";
  echo "<p>All current Organizations</p> <br> ";
        $query = "select name,type, advEmail,councilName from Organizations";
        $r = mysqli_query($connect, $query);
        echo "<table>";
        echo "<th> Organization Name </th>";
        echo "<th> Type </th>";
        echo "<th> Advisor Email </th>";
        echo "<th> Council </th>";
        while ($row = mysqli_fetch_array($r)){
                echo "<tr>";
                echo "<td> " . $row['name'] . "</td>";
                echo "<td> " . $row['type'] . "</td>";
                echo "<td> " . $row['advEmail'] . "</td>";
                echo "<td> " . $row['councilName'] . "</td>";
                echo "</tr>";
        }
        echo "</table>";

?>
  <form action="" method="POST">
<p class="p2"> Name of Organization:</p> <input type="text" name="nameOrg">
<input type="submit" value ="Submit">
</form>

<?php
}else if(strcmp($tableN,"Advisor") == 0){
        # echo "<a href =https://lamp.salisbury.edu/~wjenkins2/delete.php?Submit=Delete+Data class='butt'> Go Back </a>";
         echo "<form action = 'https://lamp.salisbury.edu/~wjenkins2/delete.php?Submit=Delete+Data'>";
        echo "<input type = 'submit' value = 'Go Back' />";
        echo "</form>";
        echo "<p>All current Advisors</p> <br> ";
        $query = "select * from Advisor";
        $r = mysqli_query($connect, $query);
        echo "<table>";
        echo "<th> Advisor Name </th>";
        echo "<th> Advisor ID </th>";
        echo "<th> Department </th>";
        echo "<th> Advisor Email </th>";
        while ($row = mysqli_fetch_array($r)){
                echo "<tr>";
                echo "<td> " . $row['name'] . "</td>";
                echo "<td> " . $row['id'] . "</td>";
                echo "<td> " . $row['dept'] . "</td>";
                echo "<td> " . $row['email'] . "</td>";
                echo "</tr>";
        }
        echo "</table>";

?>

<form action="" method="POST">
<p class ="p2" >Email: </p><input type="text" name="emailID">
<input type="submit" value ="Submit">
</form>


<?php
}else if(strcmp($tableN,"PNMS") == 0){
        # echo "<a href =https://lamp.salisbury.edu/~wjenkins2/delete.php?Submit=Delete+Data class='butt'> Go Back </a>";
         echo "<form action = 'https://lamp.salisbury.edu/~wjenkins2/delete.php?Submit=Delete+Data'>";
        echo "<input type = 'submit' value = 'Go Back' />";
        echo "</form>";
        echo "<p>All current Potential New Members</p> <br> ";
        $query = "select * from PNMs";
        $r = mysqli_query($connect, $query);
        echo "<table>";
        echo "<th> PNM ID </th>";
        echo "<th> PNM Name </th>";
        while ($row = mysqli_fetch_array($r)){
                echo "<tr>";
                echo "<td> " . $row['id'] . "</td>";
                echo "<td> " . $row['name'] . "</td>";
                echo "</tr>";
        }
        echo "</table>";

?>


<form action="" method="POST">
<p class = "p2" >Potential New Member ID:</p> <input type="text" name="PNMID">
<input type="submit" value ="Submit">
</form>

<?php
}else if(strcmp($tableN,"Corporation") ==0){
         #echo "<a href =https://lamp.salisbury.edu/~wjenkins2/delete.php?Submit=Delete+Data class='butt'> Go Back </a>";
         echo "<form action = 'https://lamp.salisbury.edu/~wjenkins2/delete.php?Submit=Delete+Data'>";
        echo "<input type = 'submit' value = 'Go Back' />";
        echo "</form>";

        echo "<p>All current Corporations</p> <br> ";
        $query = "select * from Corporation";
        $r = mysqli_query($connect, $query);
        echo "<table>";
        echo "<th> Corporation Name </th>";
        echo "<th> Corporation Type </th>";
        while ($row = mysqli_fetch_array($r)){
                echo "<tr>";
                echo "<td> " . $row['name'] . "</td>";
                echo "<td> " . $row['service_type'] . "</td>";
                echo "</tr>";
  }
        echo "</table>";

?>

<form action="" method="POST">
<p class = "p2">Corporation Name:</p> <input type="text" name="corpName">
<input type="submit" value ="Submit">
</form>


<?php
}else if(strcmp($tableN,"Council") == 0){
         #echo "<a href =https://lamp.salisbury.edu/~wjenkins2/delete.php?Submit=Delete+Data class='butt'> Go Back </a>";
         echo "<form action = 'https://lamp.salisbury.edu/~wjenkins2/delete.php?Submit=Delete+Data'>";
        echo "<input type = 'submit' value = 'Go Back' />";
        echo "</form>";

        echo "<p>All current Councils</p> <br> ";
        $query = "select * from Councils";
        $r = mysqli_query($connect, $query);
        echo "<table>";
        echo "<th> Council Name </th>";
        echo "<th> Number of Organizations </th>";
        while ($row = mysqli_fetch_array($r)){
                echo "<tr>";
                echo "<td> " . $row['name'] . "</td>";
                echo "<td> " . $row['num_orgs'] . "</td>";
                echo "</tr>";
        }
        echo "</table>";

?>

<form action="" method="POST">
<p class ="p2"> Council Name:</p> <input type="text" name="concName">
<input type="submit" value ="Submit">
</form>


<?php
}else if(strcmp($tableN,"Philan") == 0){
         #echo "<a href =https://lamp.salisbury.edu/~wjenkins2/delete.php?Submit=Delete+Data class='butt'> Go Back </a>";
         echo "<form action = 'https://lamp.salisbury.edu/~wjenkins2/delete.php?Submit=Delete+Data'>";
        echo "<input type = 'submit' value = 'Go Back' />";
        echo "</form>";

        echo "<p>All current Philanthropies</p> <br> ";
        $query = "select * from Philanthropy";
        $r = mysqli_query($connect, $query);
        echo "<table>";
echo "<th> Philanthropy Name </th>";
        echo "<th> Amount Donated </th>";
        while ($row = mysqli_fetch_array($r)){
                echo "<tr>";
                echo "<td> " . $row['name'] . "</td>";
                echo "<td> " . $row['donations'] . "</td>";
                echo "</tr>";
        }
        echo "</table>";


?>

<form action="" method="POST">
<p class = "p2"> Philanthropy Name:</p> <input type="text" name="philName">
<input type="submit" value ="Submit">
</form>


<?php
}else if(strcmp($tableN,"users") == 0){
         #echo "<a href =https://lamp.salisbury.edu/~wjenkins2/delete.php?Submit=Delete+Data class='butt'> Go Back </a>";
         echo "<form action = 'https://lamp.salisbury.edu/~wjenkins2/delete.php?Submit=Delete+Data'>";
        echo "<input type = 'submit' value = 'Go Back' />";
        echo "</form>";

        echo "<p>All current Admins </p> <br> ";
        $query = "select * from Users";
        $r = mysqli_query($connect, $query);
        echo "<table>";
        echo "<th> Admin Email </th>";
        echo "<th> Apart Of </th>";
        while ($row = mysqli_fetch_array($r)){
                echo "<tr>";
                echo "<td> " . $row['email'] . "</td>";
                echo "<td> " . $row['orgName'] . "</td>";
                echo "</tr>";
        }
        echo "</table>";

?>

<form action="" method="POST">
<p class = "p2" >Admin Email:</p> <input type="text" name="uName" placeholder="etc@gulls.salisbury.edu">
<input type="submit" value ="Submit">
</form>

<?php
}
?>
<?php
if(isset($_POST['studID'])){ //check if form was submitted for students
        $studentID = $_POST["studID"];
        #echo $studentID;
        $query = "select * from Students where id = '$studentID' limit 1";
        $r =mysqli_query($connect,$query);
        if($r) {
                $dat = mysqli_fetch_assoc($r);;
                if(count($dat) != 0){
                        echo "<p>One tuple exists... deleting</p>";
                        echo "<form action = 'https://lamp.salisbury.edu/~wjenkins2/delete.php?Submit=Delete+Data'>";
        echo "<input type = 'submit' value = 'Go Back' />";
        echo "</form>";
                        $query = "delete from Students where id = '$studentID'";
                        $del = mysqli_query($connect,$query);
                }else{
                        echo "<p>Delete Failed</p>";
                        echo "<form action = 'https://lamp.salisbury.edu/~wjenkins2/delete.php?Submit=Delete+Data'>";
        echo "<input type = 'submit' value = 'Go Back' />";
        echo "</form>";
                }#end of testing if one count exists
        }else{

                echo "Deleted Failed";
        }
}else if(isset($_POST['nameEvent']) &&($_POST['nameDate'])){ #check if form was submitted for events
        $nameID = $_POST['nameEvent'];
        #echo $nameID;
        $dateID = $_POST['nameDate'];
        #echo $dateID;

        $query = "select * from Events where name = '$nameID' and date = '$dateID' limit 1";
        $r =mysqli_query($connect,$query);
        if($r) {
                $dat = mysqli_fetch_assoc($r);;
                if(count($dat) != 0){
                        echo "<p>One tuple exists... deleting</p>";
                        echo "<form action = 'https://lamp.salisbury.edu/~wjenkins2/delete.php?Submit=Delete+Data'>";
        echo "<input type = 'submit' value = 'Go Back' />";
        echo "</form>";
                $query = "delete from Events where name = '$nameID' and date = '$dateID' limit 1";
                $r = mysqli_query($connect, $query);
                 $del = mysqli_query($connect,$query);
        }else{
                echo "<p>Delete Failed</p>";
        echo "<form action = 'https://lamp.salisbury.edu/~wjenkins2/delete.php?Submit=Delete+Data'>";
        echo "<input type = 'submit' value = 'Go Back' />";
        echo "</form>";
        }

        }else{
                echo "Deleted Failed";
        }
}else if(isset($_POST['nameOrg'])){#post checks if form submitted for organization

        $orgNameID = $_POST["nameOrg"];
 #echo $orgNameID;
        $query = "select * from Organizations where name = '$orgNameID' limit 1";
        $r =mysqli_query($connect,$query);
        if($r) {
                $dat = mysqli_fetch_assoc($r);
                if(count($dat) != 0){
                        echo "<p>One tuple exists... deleting</p>";
                        $query = "delete from Organizations where name = '$orgNameID'";
                        $del = mysqli_query($connect,$query);
                        echo "<form action = 'https://lamp.salisbury.edu/~wjenkins2/delete.php?Submit=Delete+Data'>";
        echo "<input type = 'submit' value = 'Go Back' />";
        echo "</form>";
                }else{
                        echo "<p>Delete Failed</p>";
                        echo "<form action = 'https://lamp.salisbury.edu/~wjenkins2/delete.php?Submit=Delete+Data'>";
        echo "<input type = 'submit' value = 'Go Back' />";
        echo "</form>";
                }#end of testing if one count exists
        }else{
                echo "Deleted Failed";
        }
}else if(isset($_POST["emailID"])){
        $emailID = $_POST["emailID"];
        #echo $emailID;
        $query = "select * from Advisor where email = '$emailID' limit 1";
        $r =mysqli_query($connect,$query);
        if($r) {
                $dat = mysqli_fetch_assoc($r);
                if(count($dat) != 0){
                        echo "<p>One tuple exists... deleting</p>";
                        $query = "delete from Advisor where email = '$emailID'";
                        $del = mysqli_query($connect,$query);
                        echo "<form action = 'https://lamp.salisbury.edu/~wjenkins2/delete.php?Submit=Delete+Data'>";
        echo "<input type = 'submit' value = 'Go Back' />";
        echo "</form>";
                }else{
                        echo "<p>Delete Failed</p>";
                        echo "<form action = 'https://lamp.salisbury.edu/~wjenkins2/delete.php?Submit=Delete+Data'>";
        echo "<input type = 'submit' value = 'Go Back' />";
        echo "</form>";
                }#end of testing if one count exists
        }else{
                echo "Deleted Failed";
        }
}else if(isset($_POST["PNMID"])){
        $pnmID = $_POST["PNMID"];
        #echo $pnmID;
        $query = "select * from PNMs where id = '$pnmID' limit 1";
        $r =mysqli_query($connect,$query);
        if($r) {
                $dat = mysqli_fetch_assoc($r);
                if(count($dat) != 0){
                        echo "<p>One tuple exists... deleting</p>";
                        $query = "delete from PNMs where id = '$pnmID'"; $del = mysqli_query($connect,$query);
                        echo "<form action = 'https://lamp.salisbury.edu/~wjenkins2/delete.php?Submit=Delete+Data'>";
        echo "<input type = 'submit' value = 'Go Back' />";
        echo "</form>";
                }else{
                        echo "<p>Delete Failed</p>";
                        echo "<form action = 'https://lamp.salisbury.edu/~wjenkins2/delete.php?Submit=Delete+Data'>";
        echo "<input type = 'submit' value = 'Go Back' />";
        echo "</form>";
                }#end of testing if one count exists
        }else{
                echo "Deleted Failed";
        }
}else if(isset($_POST["corpName"])){
        $corpN = $_POST["corpName"];
        #echo $corpN;
        $query = "select * from Corporation where name = '$corpN' limit 1";
        $r =mysqli_query($connect,$query);
        if($r) {
                $dat = mysqli_fetch_assoc($r);
                if(count($dat) != 0){
                        echo "<p>One tuple exists... deleting</p>";
                        $query = "delete from Corporation where name = '$corpN'";
                        $del = mysqli_query($connect,$query);
                        echo "<form action = 'https://lamp.salisbury.edu/~wjenkins2/delete.php?Submit=Delete+Data'>";
        echo "<input type = 'submit' value = 'Go Back' />";
        echo "</form>";
                }else{
                        echo "<p>Delete Failed</p>";
                        echo "<form action = 'https://lamp.salisbury.edu/~wjenkins2/delete.php?Submit=Delete+Data'>";
        echo "<input type = 'submit' value = 'Go Back' />";
        echo "</form>";
                }#end of testing if one count exists
        }else{
                echo "Deleted Failed";
        }
}else if(isset($_POST["concName"])){
        $concN = $_POST["concName"];
        #echo $concN;
        $query = "select * from Councils where name = '$concN' limit 1";
        $r =mysqli_query($connect,$query);
        if($r) {
                $dat = mysqli_fetch_assoc($r);
                if(count($dat) != 0){
                        echo "<p>One tuple exists... deleting</p>";
                        $query = "delete from Councils where name = '$concN'";
                        $del = mysqli_query($connect,$query);
                        echo "<form action = 'https://lamp.salisbury.edu/~wjenkins2/delete.php?Submit=Delete+Data'>";
        echo "<input type = 'submit' value = 'Go Back' />";
        echo "</form>";
                }else{
 echo "<p>Delete Failed</p>";
                        echo "<form action = 'https://lamp.salisbury.edu/~wjenkins2/delete.php?Submit=Delete+Data'>";
        echo "<input type = 'submit' value = 'Go Back' />";
        echo "</form>";
                }#end of testing if one count exists
        }else{
                echo "Deleted Failed";
        }
}else if(isset($_POST["philName"])){
        $philN = $_POST["philName"];
        #echo $philN;
        $query = "select * from Philanthropy where name = '$philN' limit 1";
        $r =mysqli_query($connect,$query);
        if($r) {
                $dat = mysqli_fetch_assoc($r);
                if(count($dat) != 0){
                        echo "<p>One tuple exists... deleting</p>";
                        $query = "delete from Philanthropy  where name = '$philN'";
                        $del = mysqli_query($connect,$query);
                        echo "<form action = 'https://lamp.salisbury.edu/~wjenkins2/delete.php?Submit=Delete+Data'>";
        echo "<input type = 'submit' value = 'Go Back' />";
        echo "</form>";
                }else{
                        echo "<p>Delete Failed</p>";
                        echo "<form action = 'https://lamp.salisbury.edu/~wjenkins2/delete.php?Submit=Delete+Data'>";
        echo "<input type = 'submit' value = 'Go Back' />";
        echo "</form>";
                }#end of testing if one count exists
        }else{
                echo "Deleted Failed";
        }
}else if(isset($_POST["uName"])){
        $userN = $_POST["uName"];
        #echo $userN;
        #echo "<br>";
        $query = "select * from Users where email = '$userN'";
        #echo $query;
        $r =mysqli_query($connect,$query);
        #echo $r;
        #echo "help me";
        if($r) {
                #echo "in if <br>";
                $dat = mysqli_fetch_assoc($r);
                if(count($dat) != 0){
                        echo "<p>One tuple exists... deleting</p>";
                #       echo "test";
                        $query = "delete from Users  where email = '$userN'";
                        $del = mysqli_query($connect,$query);
                        echo "<form action = 'https://lamp.salisbury.edu/~wjenkins2/delete.php?Submit=Delete+Data'>";
        echo "<input type = 'submit' value = 'Go Back' />";
        echo "</form>";
 }else{
                        echo "<p>Delete Failed</p>";
                        echo "<form action = 'https://lamp.salisbury.edu/~wjenkins2/delete.php?Submit=Delete+Data'>";
        echo "<input type = 'submit' value = 'Go Back' />";
        echo "</form>";

                }#end of testing if one count exists
        }else{
                echo "Deleted Failed";
        }
}


?>


</body>
</html>
                                       
