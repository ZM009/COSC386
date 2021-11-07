<html>
<button style="text-align:left;" type="button" onclick="window.location.href='https://lamp.salisbury.edu/~wjenkins2/homeSite.php';"> Home </button>
<head>
<link rel="stylesheet" href="add.css" type="text/css"/>
<title>
Add PNM
</title>
</head>
<br><br>
<h1>Add Potential New Member:</h1>
<body>
<div>
<br>
<form action="successPNMs.php" method="post">
        Name:<br><input type="text" name="name" placeholder="Joe Fernandez"><br><br>
        ID:<br><input type="number" id="id" name="id" min="0" max="99999999999"><br><br>
        Event:<br><input type="text" name="event" placeholder="Meet the Brothers"><br><br>
        Event Location:<br><input type="text" name="location" placeholder="HS 143"><br><br>
        Event Date:<br><input type="text" name="date" placeholder="06-66-2021"><br><br>
        <br><input type="Submit" value="Submit"><br><br>
	<button style="text-align:left;" type="button" onclick="window.location.href='https://lamp.salisbury.edu/~wtownsend2/addDatabase.php';"> Back </button>
</form>
<br>
</div>
</body>
</html>
