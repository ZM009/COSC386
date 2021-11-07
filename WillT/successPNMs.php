<html>
<head>
<style>
        body{ color: yellow; background-color: maroon;}
</style>
</head>
<body>
<?php
        $con=@mysqli_connect('localhost','wtownsend2','#paraSwimmer16','SUGreekLifeDB');

        $event=$_POST['event'];
        $name=$_POST['name'];
        $id=$_POST['id'];
        $loc=$_POST['location'];
        $date=$_POST['date'];

        $query="insert into PNMs values($id,'$name','$event','$date','$loc');";

        if(mysqli_query($con,$query))
                print "Insertion Sucessful!";
        else
                print "Failed to Insert!";
        mysqli_close($con);
?>
<br><br>
<button style="text-align:left;" type="button" onclick="window.location.href='https://lamp.salisbury.edu/~wjenkins2/homeSite.php';"> Home </button><br>
<button style="text-align:left;" type="button" onclick="window.location.href='https://lamp.salisbury.edu/~wtownsend2/addPNMs.php';"> Add Another PNM </button>
</body>
</html>
