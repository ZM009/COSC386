<button style="text-align:left;" type="button" onclick="window.location.href='https://lamp.salisbury.edu/~wjenkins2/homeSite.php';"> Home </button>
<head>
<title>
Add Organization
</title>
<link rel="stylesheet" href="add.css" type="text/css" />
</head>
<br><br>
<h1>Add Organization</h1>
<body>
<form action="successOrg.php" method="post">
<div>
<br><br>
        Name:<br><input type="text" name="orgName" placeholder="Sigma Tigma Figma"><br><br>
        Colors:<br><input type="text" name="colors" placeholder="Blue and Grey"><br><br>
	Type:<br><select name="type" id="type">
		<option value="Fraternity">Fraternity</option>
		<option value="Sorority">Sorority</option>
		<option value="Co-Ed">Co-Ed</option>
	</select>
	<br><br>
        Quota:<br><input type="number" id="quota" name="quota" min="0" max="99999999999"><br><br>
	Dues:<br><input type="number" id="dues" name="dues" min="0" max="99999999999"><br><br>
	Member #:<br><input type="number" id="memNum" name="memNum" min="0" max="99999999999"><br><br>
	Motto:<br><input type="text" name="motto" placeholder="Let Go already!"><br><br>
	Advisor Email:<br><input type="text" name="advEmail" placeholder="example@salisbury.edu"><br><br>
	Philantropy:<br><input type="text" name="pName" placeholder="Life of Giving"><br><br>
	Council:<br><input type="text" name="cName" placeholder="The Git Gods"><br><br>
        <br><input type="Submit" value="Submit"><br><br>
	<button style="text-align:left;" type="button" onclick="window.location.href='https://lamp.salisbury.edu/~wtownsend2/addDatabase.php';"> Back </button>
</form>
<br><br>
</div>
</body>
</html>
