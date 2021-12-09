<?php 
   session_start();
   require 'navbar.php';
   require_once 'config.php';
   $method = getenv('REQUEST_METHOD');

   // checks if data was posted to form
   if($method == 'POST') {
	$email = mysqli_real_escape_string($connection, $_POST['email']);
	$password = mysqli_real_escape_string($connection, $_POST['password']);
	$hashed_passwd = password_hash($password, PASSWORD_DEFAULT);

	if(!empty($email) && !empty($password)) {
		// read from db to compare credentials
		$query = "select * from Users where email = '$email' limit 1";
		$r = mysqli_query($connection, $query);

		if($r) {
		   if(password_verify($password, $hashed_passwd)) {
			$dat = mysqli_fetch_assoc($r);
			if(count($dat) != 0) {
				$_SESSION['status'] = $dat['status'];
				$_SESSION['email'] = $dat['email'];
				$_SESSION['password'] = $dat['password'];
				$_SESSION['orgName'] = $dat['orgName'];
				header("Location: https://lamp.salisbury.edu/~wjenkins2/home.php");
			} else {
				echo '<script>alert("Invalid Credentials!")</script>';
			}
		   }
		}
	}
   }
?>
<!DOCTYPE html>
<html>
<head>
   <title>Log In</title>
   <style>
      *,
   *:before,
   *:after {
    	margin: 0;
    	padding: 0;
    	font-family: inherit;
    	box-sizing: border-box;
   }
   #main {
    	width: max-content;
    	margin: 40px auto;
    	font-family: "Segoe UI", sans-serif;
    	padding: 25px 28px;
    	background: #f2f3f4; /* default: 151414 for form */
    	/*border-radius: 4px; */
    	border: 5px solid #d4af37; /* 1px solid #ffd700 */
    	animation: popup 0.4s cubic-bezier(0.68, -0.55, 0.27, 1.55);
   }
   @keyframes popup {
       0% {
        	transform: scale(0.2);
        	opacity: 0;
       }
       100% {
        	transform: scale(1);
        	opacity: 1;
       }
   }
   h2 {
    	text-align: center;
    	font-size: 28px;
    	margin-bottom: 20px;
    	font-weight: 400;
    	color: black;
   }
   .input-parent {
    	display: block;
    	margin-bottom: 20px;
   }
   label {
    	display: block;
    	font-size: 16px;
    	margin-bottom: 8px;
    	color: #a4a4a4;
   }
   .input-parent input {
    	padding: 10px 8px;
    	width: 100%;
    	font-size: 16px;
    	background: #d3d3d3;
    	border: none;
    	color: black;
    	border-radius: 4px;
    	outline: none;
    	transition: all 0.2s ease;
   }
   .input-parent input:hover {
   	background: #c7c7c7;
   }
   .input-parent input:focus {
    	box-shadow: 0px 0px 0px 1px #0087ff;
   }
   button {
    	padding: 10px 18px;
    	font-size: 15px;
    	background: maroon;
    	width: 100%;
    	border: none;
    	border-radius: 4px;
   	color: #f4f4f4;
	transition: all 0.2s ease;
   }
   button:hover {
	opacity: 0.9;
   }
   button:focus {
	box-shadow: 0px 0px 0px 3px black;
   }
   body {
	background: maroon;
   }
   img {
	display: block;
	margin-left: auto;
	margin-right: auto;
   }
   .tooltip {
	position: relative;
	display: inline-block;
	border-bottom: 1px dotted block;
   }

   .tooltip .tooltiptext {
	visibility: hidden;
	width: 250px;
	background-color: black;
	color: #fff;
	text-align: center;
	border-radius: 6px;
	padding: 5px 0;
	position: absolute;
	z-index: 1;
	top: -5px;
	left: 110%;
   }

   .tooltip .tooltiptext::after {
	content: "";
	position: absolute;
	top: 50%;
	right: 100%;
	margin-top: -5px;
	border-width: 5px;
	border-style: solid;
	border-color: transparent black transparent transparent;
   }

   .tooltip:hover .tooltiptext {
	visibility: visible;
   }

   </style>
</head>
<body>
  <form method="post" action="" id="main">
    <h2>Login to your account</h2>

    <div class="input-parent">
      <label for="username">Email</label>
      <div class="tooltip">
         <input type="text" name="email" id="username" placeholder="Email" required = "required">
         <span class="tooltiptext">Emails can be from 0-60 characters in length and must end with @''.com</span>
      </div>
    </div>

    <div class="input-parent">
      <label for="password">Password</label>
      <div class="tooltip">
         <input type="password" name="password" id="password" placeholder="Password" required>
	 <span class="tooltiptext">Passwords must be at least 6 characters long, and cannot contain special characters other than "_".</span>
      </div>
    </div>

    <button type="submit">Login</button>
  </form>
</body>
<footer>
	<img src="https://cosida.com/common/controls/image_handler.aspx?thumb_id=0&image_path=/images/2019/2/21/SalisburyLogo.png" alt="Sammy the Seagull" style="width:200px;height:200px;">
</footer>
</html>
