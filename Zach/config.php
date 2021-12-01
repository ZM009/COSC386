<?php
/* Contains the MySQL server connection needed for the site */

$connection = @mysqli_connect('localhost', 'zmoore4', 'zmoore4', 'SUGreekLifeDB');
// Attempts to connect to the DB

if(!$connection) {
    die("Connection Failure: " . mysqli_error());
}

?>

