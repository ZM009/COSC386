<!DOCTYPE html>
<html>
<head>
   <style>
	/* styles the navigation bar itself */
	.topnav {
	   position: -webkit-sticky; /* Safari */
	   position: sticky;
	   top: 0;
	   background-color: #800;
	   overflow: hidden;
	}

	/* Styles links in navigation bar */
	.topnav a {
	   float: left;
	   color: #F2F2F2;
	   text-align: center;
	   padding: 14px 16px;
	   text-decoration: none;
	   font-size: 17px;
	}

	/* :hover allows the color of the links to change when the mouse
           hovers over them */
	.topnav a:hover {
	   background-color: #DDD;
	   color: black;
	}

	.topnav a.active {
	   background-color: #ffd700;
	   color: #800;
	}

   </style>
</head>
<body>
   <div class="topnav" id="nav">
     <ul>
	<a class="active" href="home.php">Home</a>
	<a href="index.php">Login</a>
	<a href="reg.php">Register</a>
	<a href="#contact">Contact</a>
	<a style="float:right" href="#admin">Admin</a>
	<a href="#about">About</a>
     </ul>
   </div>

   <script>
	$(document).ready(function() {
		$('a').click(function() {
			$('a.active').removeClass('active');
			$(this).addClass('active');
		});
	});
   </script>
</body>
</html>
