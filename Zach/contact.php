<?php
include 'navbar.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
<title>Contact Form</title>
<meta charset="utf-8">
<style>
 /* color of the page to match other pages in site */
  h1 {
	font-family: Arial, Helvetica, sans-serif;
	text-align: center;
  }
  body {
	background-color: maroon;
	color: #d4af37;
  }

  form {
	max-width: 420px;   /* prevents contact form becoming larger than 420px */
	/* margin has two values: top and bottom margin are 50px and the left and right margins
	   are calculated by the browser with the value 'auto'
	*/
	margin: 50px auto;
  }
 /* class to style feedback input */
  .f-input {
	color: white;   /* color of the text inside of any elements with the f-input class */
	font-family: Helvetica, Arial, sans-serif;
	font-weight: 500;   /* sets the boldness of the font chosen in font-family */
	font-size: 18px;  
	border-radius: 5px;  /* border-radius is used to round the borders */
	line-height: 22px;
	background-color: transparent;  /* makes the feedback boxes transparent, displaying the color of the page */
	border: 2px solid #ffd700;  /* creates solid gold border */
	transition: all 0.3s; /* applies transition properties to all with a duration of 0.3s */
	padding: 13px;
	margin-bottom: 15px;  /* sets the bottom margin to 15px */
	width: 100%;
	box-sizing: border-box;  /* accounts for borders in any values specified */
	outline: 0;   /* ensures there is no outline */
  }
  
  /* when clicked, the border of any element with the f-input class will change colors to a darker gold */
  .f-input:focus {
	border: 2px solid #eebc1d;
  }
  /* styles the textarea tag, for user comments */
  textarea {
	height: 150px;
	line-height: 150%;  /* sets the distance between lines of text */
	resize: vertical;   /* allows the user to resize the area vertically if needed */
  }

  [type="submit"] {
	font-family: Arial, Helvetica, sans-serif;
	width: 100%;
	background: #ffd700;
	border-radius: 5px;
	border: 0;
	cursor: pointer;
	color: maroon;
	font-size: 24px;
	padding-top: 10px;
	padding-bottom: 10px;
	transition: all 0.3s;
	margin-top: -4px;  /* sets space on top of element, outside of its border */
	font-weight: 700;
  }

  [type="reset"] {
	font-family: Arial, Helvetica, sans-serif; /* Arial is used, but it falls back to the other two fonts if Arial is not available */
	width: 100%;
	background: #ffd700;  /* gives the rest button a gold background by default */
	border-radius: 5px;
	border: 0;
	cursor: pointer;  /* this indicates a link (grabbed form devloper.mozilla.org) */
	color: maroon;
	font-size: 24px;
	padding-top: 10px;
	padding-bottom: 10px;   /* gives 10px of space between the content and border of the element */
	transition: all 0.3s;  
	margin-top: 4px;
	font-weight: 700;
  }
  /* any <input> tags with type submit or rese will contain the following css on hover */
  [type="submit"]:hover { background: #eebc1d; color: maroon; }
  [type="reset"]:hover { background: #3a3b3c; color: red; }

</style>
</head>
<body>
  <script type="text/javascript">
    window.onload = function() {	
	document.getElementById("contact").className += "active";
	document.getElementById("home").className = document.getElementById("home").className.replace( /(?:^|\s)active(?!\S)/g , ' ' )
	document.getElementById("admin").className = document.getElementById("active").className.replace( /(?:^|\s)active(?!\S)/g , ' ' )
    }
  </script>
  <h1>Contact Us</h1>
  <form method="get">
    <input name="fname" type="text" class="f-input" placeholder="First Name" />
    <input name="lname" type="text" class="f-input" placeholder="Last Name" />
    <input name="email" type="text" class="f-input" placeholder="Email" />
    <textarea name="text" class="f-input" placeholder="Type any comments here..."></textarea>
    <input type="submit" value="Contact"> <input type="reset">
  </form>
</body>
</html>
