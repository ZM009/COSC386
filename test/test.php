<?php
  #Made for testing purporses
  if($connection = @mysqli_connect('localhost', 'zmoore4', 'zmoore4', 'SUGreekLifeDB') {
    echo "Connect Succces";
  } else {
    die('Connect Failed: ' . mysqli_error());
  }
     
?>
