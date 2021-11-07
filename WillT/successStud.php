<html>
<head>
<style>
        body{ color: yellow; background-color: maroon;}
</style>
</head>
<body>
<?php
        $con=@mysqli_connect('localhost','wtownsend2','#paraSwimmer16','SUGreekLifeDB');

        $name=$_POST['name'];
        $id=$_POST['id'];
        $volHour=$_POST['hours'];
        $email=$_POST['email'];
        $org=$_POST['org'];
        $pos=$_POST['pos'];
        $years=$_POST['years'];
	
        $query="insert into Students values('$name',$id,$volHour,'$email','$org');";
	$result1=mysqli_query($con,$query);
	
	if(isset($pos)||isset($years)){
		$extraQuery="insert into governing_body values($id,'$org','$pos',$years);";
		$result2=mysqli_query($con,$extraQuery);
        	if($result1&&$result2)
                	print "Insertion Sucessful!";
        	else{
			if(!$result1 && $result2)
				mysqli_query($con,"delete from governing_body where id=$id and orgName='$org' and position='$pos' and years_held='$years';");
			elseif($result1 && !$result2)
				mysqli_query($con,"delete from Students where name='$name' and id=$id and volunteer_hrs=$volHour and email='$email' and orgName='$org';");
                	print "Failed to insert";
		}
	}
	else{
		if($result1)
			print "Insertion Successful!";
		else
			print "Failed to Insert!";
	}
        mysqli_close($con);
?>
<br><br>
<button style="text-align:left;" type="button" onclick="window.location.href='https://lamp.salisbury.edu/~wjenkins2/homeSite.php';"> Home </button><br>
<button style="text-align:left;" type="button" onclick="window.location.href='https://lamp.salisbury.edu/~wtownsend2/addStud.php';"> Add Another Current Member</button>
</body>
</html>
