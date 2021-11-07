<html>
<button style="text-align:left;" type="button" onclick="window.location.href='https://lamp.salisbury.edu/~wjenkins2/homeSite.php';"> Home </button>
<head>
<link rel="stylesheet" href="add.css" type="text/css"/>
<title>
Add Current Member
</title>
<h1>Add Current Member</h1>
</head>
<body>
<?php if ($_GET['gb']!='yep'&&$_GET['gb']!='nope'):?>
<div>
<form action="addStud.php">
	<br><br>Are they a part of the governing body of their Organization?<br><input type="radio" id="gb" name="gb" value="yep">
        <label for="gb">Yes</label>
        <input type="radio" id="not" name="gb" value="nope">
        <label for="not">No</label><br><br>
	<input type="submit" value="Submit"><br><br>
	<button style="text-align:left;" type="button" onclick="window.location.href='https://lamp.salisbury.edu/~wtownsend2/addDatabase.php';"> Back </button>
</form>
</div>
<?php endif; ?>

<?php if ($_GET['gb']=='yep'||$_GET['gb']=='nope'):?>
<div>
<br><br>
<form action="successStud.php" method="post">
        Name:<br><input type="text" name="name" placeholder="Joe Fernandez"><br><br>
        ID:<br><input type="number" id="id" name="id" min="0" max="99999999999"><br><br>
        Volunteer Hours:<br><input type="number" id="hours" name="hours" min="0" max="99999999999"><br><br>
        Email:<br><input type="text" name="email" placeholder="example@gulls.salisbury.edu"><br><br>
        Organization:<br><input type="text" name="org" placeholder="Sigma Tigma Figma"><br><br>
	<?php if($_GET['gb']=='yep'): ?>
		Position:<br><input type="text" name="pos" placeholder="President"><br><br>
		Years Held:<br><input type="number" id="years" name="years" min="0" max="99999999999"><br><br>
	<?php endif; ?>	
	<br><input type="Submit" value="Submit"><br><br>
<button style="text-align:left;" type="button" onclick="window.location.href='https://lamp.salisbury.edu/~wtownsend2/addDatabase.php';"> Back </button>
<br><br>
</form>
</div>
<?php endif;?>
</body>
</html>
