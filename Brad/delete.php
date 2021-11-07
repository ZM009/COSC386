<?php

include "dbConn.php"; // Using database connection file here

$name = $_GET['name']; // get name through query string

$del = mysqli_query($db,"delete from Students where name = '$name'"); // delete query

if($del)
{
    mysqli_close($db); // Close connection
    header("location:new.php"); // redirects to all records page
    exit;
}
else
{
    echo "Error deleting record from Students"; // display error message if not delete
}
?>



<?php

include "dbConn.php"; // Using database connection file here

$name = $_GET['name']; // get name through query string

$del = mysqli_query($db,"delete from Advisor where name = '$name'"); // delete query

if($del)
{
    mysqli_close($db); // Close connection
    header("location:new.php"); // redirects to all records page
    exit;
}
else
{
    echo "Error deleting record from Advisor"; // display error message if not delete
}
?>



<?php

include "dbConn.php"; // Using database connection file here

$name = $_GET['name']; // get name through query string

$del = mysqli_query($db,"delete from Corporation where name = '$name'"); // delete query

if($del)
{
    mysqli_close($db); // Close connection
    header("location:new.php"); // redirects to all records page
    exit;
}
else
{
    echo "Error deleting record from Corporation"; // display error message if not delete
}
?>


<?php

include "dbConn.php"; // Using database connection file here

$name = $_GET['name']; // get name through query string

$del = mysqli_query($db,"delete from Councils where name = '$name'"); // delete query

if($del)
{
    mysqli_close($db); // Close connection
    header("location:new.php"); // redirects to all records page
    exit;
}
else
{
    echo "Error deleting record from Councils"; // display error message if not delete
}
?>


<?php

include "dbConn.php"; // Using database connection file here

$name = $_GET['name']; // get name through query string

$del = mysqli_query($db,"delete from Events where name = '$name'"); // delete query

if($del)
{
    mysqli_close($db); // Close connection
    header("location:new.php"); // redirects to all records page
    exit;
}
else
{
    echo "Error deleting record from Events"; // display error message if not delete
}
?>


<?php

include "dbConn.php"; // Using database connection file here

$name = $_GET['name']; // get name through query string

$del = mysqli_query($db,"delete from Organizations where name = '$name'"); // delete query

if($del)
{
    mysqli_close($db); // Close connection
    header("location:new.php"); // redirects to all records page
    exit;
}
else
{
    echo "Error deleting record from Organizations"; // display error message if not delete
}
?>


<?php

include "dbConn.php"; // Using database connection file here

$name = $_GET['name']; // get name through query string

$del = mysqli_query($db,"delete from PNMs where name = '$name'"); // delete query

if($del)
{
    mysqli_close($db); // Close connection
    header("location:new.php"); // redirects to all records page
    exit;
}
else
{
    echo "Error deleting record from PNMS"; // display error message if not delete
}
?>


<?php

include "dbConn.php"; // Using database connection file here

$name = $_GET['name']; // get name through query string

$del = mysqli_query($db,"delete from Philanthropy where name = '$name'"); // delete query

if($del)
{
    mysqli_close($db); // Close connection
    header("location:new.php"); // redirects to all records page
    exit;
}
else
{
    echo "Error deleting record from Philanthropy"; // display error message if not delete
}
?>


<?php

include "dbConn.php"; // Using database connection file here

$name = $_GET['name']; // get name through query string

$del = mysqli_query($db,"delete from Users where name = '$name'"); // delete query

if($del)
{
    mysqli_close($db); // Close connection
    header("location:new.php"); // redirects to all records page
    exit;
}
else
{
    echo "Error deleting record from Users"; // display error message if not delete
}
?>
