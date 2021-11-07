<html>
<head>
<style>
        body{ color: yellow; background-color: maroon;}
</style>
</head>
<body>
<?php
        $con=@mysqli_connect('localhost','wtownsend2','#paraSwimmer16','SUGreekLifeDB');

        $id=$_POST['id'];
        $name=$_POST['name'];
        $dept=$_POST['dept'];
        $email=$_POST['email'];

        $query="insert into Advisor values('$name',$id,'$dept','$email');";

        if(mysqli_query($con,$query))
                print "Insertion Sucessful!";
        else
                print "Failed to insert";
        mysqli_close($con);
?>
<br><br>
<button style="text-align:left;" type="button" onclick="window.location.href='https://lamp.salisbury.edu/~wjenkins2/homeSite.php';"> Home </button><br>
<button style="text-align:left;" type="button" onclick="window.location.href='https://lamp.salisbury.edu/~wtownsend2/addAdv.php';"> Add Another Advisor </button>
</body>
</html>
