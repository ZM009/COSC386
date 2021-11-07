<html>
<head>
<style>
        body{ color: yellow; background-color: maroon;}
</style>
</head>
<body>
<?php
        $con=@mysqli_connect('localhost','wtownsend2','#paraSwimmer16','SUGreekLifeDB');

        $corpName=$_POST['corpName'];
        $type=$_POST['servType'];
        $org=$_POST['org'];
	
        $query1="insert into Corporation values('$corpName','$type');";
        $query2="insert into works_with values('$org','$corpName');";
        $rs1=mysqli_query($con,$query1);
        $rs2=mysqli_query($con,$query2);

	echo $query1;
	echo $query2;

        if($rs1&&$rs2)
                print "Insertion Sucessful!";
        else{
                mysqli_query($con,"delete from Corporations where name='$corpName';");
                mysqli_query($con,"delete from works_with where orgName='$org';");
                print "Failed to Insert!";
        }
        mysqli_close($con);
?>
<br><br>
<button style="text-align:left;" type="button" onclick="window.location.href='https://lamp.salisbury.edu/~wjenkins2/homeSite.php';"> Home </button><br>
<button style="text-align:left;" type="button" onclick="window.location.href='https://lamp.salisbury.edu/~wtownsend2/addCorp.php';"> Add Another Corporation </button>
</body>
</html>
