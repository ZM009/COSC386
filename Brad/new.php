<!-- This deletes from the ships table, can switch to attributes in the greek life database. Need to see
 if i can put radio buttons to get the user to choose the attribute and then get to this to delete.
 Maybe only do specific deletions instead of doing the radio buttons? Not sure how the radio buttons would select the attribute and then pull up a table like this, would maybe need$
 possible.
-->

<!DOCTYPE html>
<html>
<head>
<title>Display All Tables from Database to Delete</title>
</head>
<style> 
    body{ background-color: maroon;}
    h1{ color: yellow;}
    h2{ color: yellow;}
    td{ color: white;}
    a{color: yellow;}
 </style>
<body>

<h1>Display All Tables From The Database to Delete</h1>

<h2>Advisor</h2>

<table border="2">
  <tr>
    <td>Name</td>
    <td>ID</td>
    <td>Dept</td>
    <td>Email</td>
  </tr>

  <?php
include "dbConn.php"; // Using database connection file here

$records = mysqli_query($db,"select * from Advisor"); // fetch data from database

while($data = mysqli_fetch_array($records))
{
?>
  <tr>
    <td><?php echo $data['name']; ?></td>
    <td><?php echo $data['id']; ?></td>
    <td><?php echo $data['dept']; ?></td>
    <td><?php echo $data['email']; ?></td>
    <td><a href="delete.php?name=<?php echo $data['name']; ?>">Delete</a></td>
  </tr> 
<?php
}
?>
</table>
</body>
</html>



<h2>Corporation</h2>

<table border="2">
  <tr>
    <td>Name</td>
    <td>Service Type</td>
  </tr>
  
  <?php

include "dbConn.php"; // Using database connection file here

$records = mysqli_query($db,"select * from Corporation"); // fetch data from database

while($data = mysqli_fetch_array($records))
{
?>
  <tr>
    <td><?php echo $data['name']; ?></td>
    <td><?php echo $data['service_type']; ?></td>
    <td><a href="delete.php?name=<?php echo $data['name']; ?>">Delete</a></td>
  </tr> 
<?php
}
?>
</table>

</body>
</html>




<h2>Councils</h2>

<table border="2">
  <tr>
    <td>Name</td>
    <td>Organization Num</td>
  </tr>



<?php

include "dbConn.php"; // Using database connection file here

$records = mysqli_query($db,"select * from Councils"); // fetch data from database

while($data = mysqli_fetch_array($records))
{
?>
  <tr>
    <td><?php echo $data['name']; ?></td>
    <td><?php echo $data['num_orgs']; ?></td>
    <td><a href="delete.php?name=<?php echo $data['name']; ?>">Delete</a></td>
  </tr> 
<?php
}
?>
</table>

</body>
</html>
<h2>Events</h2>

<table border="2">
  <tr>
    <td>Name</td>
    <td>Date</td>
    <td>Location</td>
    <td>Time</td>
  </tr>



<?php

include "dbConn.php"; // Using database connection file here

$records = mysqli_query($db,"select * from Events"); // fetch data from database

while($data = mysqli_fetch_array($records))
{
?>
  <tr>
    <td><?php echo $data['name']; ?></td>
    <td><?php echo $data['date']; ?></td>
    <td><?php echo $data['location']; ?></td>
    <td><?php echo $data['time']; ?></td>
    <td><a href="delete.php?name=<?php echo $data['name']; ?>">Delete</a></td>
  </tr> 
<?php
}
?>
</table>

</body>
</html>
<h2>Organizations</h2>

<table border="2">
  <tr>
    <td>Name</td>
    <td>Council Name</td>
    <td>Colors</td>
    <td>Type</td>
    <td>Quota</td>
    <td>Dues</td>
    <td>Number of Members</td>
    <td>Motto</td>
    <td>Advisor Email</td>
    <td>Philanthropy Name</td>
  </tr>



<?php

include "dbConn.php"; // Using database connection file here

$records = mysqli_query($db,"select * from Organizations"); // fetch data from database

while($data = mysqli_fetch_array($records))
{
?>
  <tr>
    <td><?php echo $data['name']; ?></td>
    <td><?php echo $data['councilName']; ?></td>
    <td><?php echo $data['colors']; ?></td>
    <td><?php echo $data['type']; ?></td>
    <td><?php echo $data['quota']; ?></td>
    <td><?php echo $data['dues']; ?></td>
    <td><?php echo $data['num_members']; ?></td>
    <td><?php echo $data['motto']; ?></td>
    <td><?php echo $data['advEmail']; ?></td>
    <td><?php echo $data['philName']; ?></td>
    <td><a href="delete.php?name=<?php echo $data['name']; ?>">Delete</a></td>
  </tr> 
<?php
}
?>
  </table>

</body>
</html>




<h2>PNMs</h2>

<table border="2">
  <tr>
    <td>ID</td>
    <td>Name</td>
    <td>Event Name</td>
    <td>Event Date</td>
    <td>Event Location</td>
  </tr>



<?php

include "dbConn.php"; // Using database connection file here

$records = mysqli_query($db,"select * from PNMs"); // fetch data from database

while($data = mysqli_fetch_array($records))
{
?>
  <tr>
    <td><?php echo $data['id']; ?></td>
    <td><?php echo $data['name']; ?></td>
    <td><?php echo $data['eventName']; ?></td>
    <td><?php echo $data['eventDate']; ?></td>
    <td><?php echo $data['eventLocation']; ?></td>
    <td><a href="delete.php?name=<?php echo $data['name']; ?>">Delete</a></td>
  </tr> 
<?php
}
?>
</table>

</body>
</html>




<h2>Philanthropy</h2>

<table border="2">
  <tr>
    <td>Name</td>
    <td>Donations</td>
  </tr>



<?php

include "dbConn.php"; // Using database connection file here

$records = mysqli_query($db,"select * from Philanthropy"); // fetch data from database

while($data = mysqli_fetch_array($records))
{
?>
  <tr>
    <td><?php echo $data['name']; ?></td>
    <td><?php echo $data['donations']; ?></td>
    <td><a href="delete.php?name=<?php echo $data['name']; ?>">Delete</a></td>
  </tr> 
<?php
}
?>
</table>

</body>
</html>




<h2>Students</h2>

<table border="2">
  <tr>
    <td>Name</td>
    <td>ID</td>
    <td>Volunteer Hours</td>
    <td>Email</td>
    <td>Organization Name</td>
  </tr> 



<?php

include "dbConn.php"; // Using database connection file here

$records = mysqli_query($db,"select * from Students"); // fetch data from database

while($data = mysqli_fetch_array($records))
{
?>
  <tr>
    <td><?php echo $data['name']; ?></td>
    <td><?php echo $data['id']; ?></td>
    <td><?php echo $data['volunteer_hrs']; ?></td>
    <td><?php echo $data['email']; ?></td>
    <td><?php echo $data['orgName']; ?></td>
    <td><a href="delete.php?name=<?php echo $data['name']; ?>">Delete</a></td>
  </tr> 
<?php
}
?>
</table>

</body>
</html>




<h2>Users</h2>

<table border="2">
  <tr>
    <td>Username</td>
    <td>Password</td>
    <td>Status</td>
  </tr>



<?php

include "dbConn.php"; // Using database connection file here

$records = mysqli_query($db,"select * from Users"); // fetch data from database

while($data = mysqli_fetch_array($records))
{
?>
  <tr>
    <td><?php echo $data['username']; ?></td>
    <td><?php echo $data['password']; ?></td>
    <td><?php echo $data['status']; ?></td>
    <td><a href="delete.php?name=<?php echo $data['username']; ?>">Delete</a></td>
  </tr> 
<?php
}
?>
</table>

</body>
</html>
