<html>
<head>
<style>
        body{ color: yellow; background-color: maroon;}
</style>
</head>
<body>
<?php
        $con=@mysqli_connect('localhost','wtownsend2','#paraSwimmer16','SUGreekLifeDB');

        $cName=$_POST['cName'];
        $orgNum=$_POST['orgNum'];

        $query="insert into Councils values('$cName',$orgNum);";

        if(mysqli_query($con,$query))
                print "Insertion Sucessful!";
        else
                print "Failed to Insert!";
        mysqli_close($con);
?>
<br><br>
<button style="text-align:left;" type="button" onclick="window.location.href='https://lamp.salisbury.edu/~wjenkins2/homeSite.php';"> Home </button><br>
<button style="text-align:left;" type="button" onclick="window.location.href='https://lamp.salisbury.edu/~wtownsend2/addCoun.php';"> Add Another Council </button>
</body>
</html>
