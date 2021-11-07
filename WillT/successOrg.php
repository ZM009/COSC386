<html>
<head>
<style>
        body{ color: yellow; background-color: maroon;}
</style>
</head>
<body>
<?php
        $con=@mysqli_connect('localhost','wtownsend2','#paraSwimmer16','SUGreekLifeDB');

        $orgName=$_POST['orgName'];
        $colors=$_POST['colors'];
        $type=$_POST['type'];
	$quota=$_POST['quota'];
	$dues=$_POST['dues'];
	$memNum=$_POST['memNum'];
	$motto=$_POST['motto'];
	$advEmail=$_POST['advEmail'];
	$pName=$_POST['pName'];
	$cName=$_POST['cName'];

        $query="insert into Organizations values('$orgName','$colors','$type',$quota,$dues,$memNum,'$motto','$advEmail','$pName','$cName');";

        if(mysqli_query($con,$query))
                print "Insertion Sucessful!";
        else
                print "Failed to insert";
        mysqli_close($con);
?>
<br><br>
<button style="text-align:left;" type="button" onclick="window.location.href='https://lamp.salisbury.edu/~wjenkins2/homeSite.php';"> Home </button><br>
<button style="text-align:left;" type="button" onclick="window.location.href='https://lamp.salisbury.edu/~wtownsend2/addOrg.php';"> Add Another Organization</button>
</body>
</html>
