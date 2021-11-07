<html>
<body>
<head>
<style>
        body{ color: yellow; background-color: maroon;}
</style>
</head>
<?php
        $con=@mysqli_connect('localhost','wtownsend2','#paraSwimmer16','SUGreekLifeDB');

        $pName=$_POST['pName'];
        $don=$_POST['donations'];

        $query="insert into Philanthropy values('$pName',$don);";

        if(mysqli_query($con,$query))
                print "Insertion Sucessful!";
        else
                print "Failed to Insert!";
        mysqli_close($con);
?>
<br><br>
<button style="text-align:left;" type="button" onclick="window.location.href='https://lamp.salisbury.edu/~wjenkins2/homeSite.php';"> Home </button><br>
<button style="text-align:left;" type="button" onclick="window.location.href='https://lamp.salisbury.edu/~wtownsend2/addPhil.php';"> Add Another Philanthropy </button>
</body>
</html>
