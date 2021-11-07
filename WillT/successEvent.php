<html>
<head>
<link rel="stylesheet" href="add.css" type="text/css" />
</head>
<body>
<?php
        $con=@mysqli_connect('localhost','wtownsend2','#paraSwimmer16','SUGreekLifeDB');

	$event=$_POST['eventName'];
	$org=$_POST['orgName'];
        $date=$_POST['date'];
        $loc=$_POST['location'];
        $time=$_POST['time'];

        $query1="insert into Events values('$event','$date','$loc','$time');";
	$query2="insert into held_by values('$event','$date','$loc','$org');";
	$rs1=mysqli_query($con,$query1);
	$rs2=mysqli_query($con,$query2);

	if($rs1&&$rs2)
		print "Insertion Sucessful!";
	else{
		if($rs1)
			mysqli_query($con,"delete from Events where name='$event' and date='$date' and location='$loc' and time='$time';");
		if($rs2)
			mysqli_query($con,"delete from held_by where orgName='$org' and eventName='$event' and eventDate=$date and eventLocation='$loc';");
		print "Failed to Insert!";
	}
        mysqli_close($con);
?>
<br><br>
<button style="text-align:left;" type="button" onclick="window.location.href='https://lamp.salisbury.edu/~wjenkins2/homeSite.php';"> Home </button><br>
<button style="text-align:left;" type="button" onclick="window.location.href='https://lamp.salisbury.edu/~wtownsend2/addEvent.php';"> Add Another Event </button>
</body>
</html>
