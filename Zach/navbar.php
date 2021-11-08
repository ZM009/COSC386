<!DOCTYPE html>
<html>
<head>
   <script type"text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
   <style>
        body {
           margin: 0px;
        }
        ul {
           list-style-type: none;  /* kept in case <li> is ever used for navbar; learned from w3schools */
           margin: 0px;
           padding: 0px;
        }
        /* styles the navigation bar itself */
        .topnav {
           position: -webkit-sticky; /* -webkit prefix is req'd by Safari/MacOS (learned prefix from w3schools) */
           position: sticky;   /* allows navbar to stick to the top of the page, even when user is scrolling */
           top: 0;
           background-color: black;
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
           background-color: white;
           color: black;
        }

        .topnav a.active {
           background-color: #ffd700;
           color: #800;
        }

   </style>
</head>
<body>
   <div class="topnav">
     <ul>
        <a class="active" href="https://lamp.salisbury.edu/~wjenkins2/home.php">Home</a>
        <a href="https://lamp.salisbury.edu/~zmoore4/index.php">Login</a>
        <a href="https://lamp.salisbury.edu/~zmoore4/reg.php">Register</a>
        <a href="https://lamp.salisbury.edu/~zmoore4/contact.php">Contact</a>
        <a style="float:right" href="https://lamp.salisbury.edu/~zmoore4/logout.php">Logout</a>
        <a style="float:right" href="https://lamp.salisbury.edu/~bbogaczyk1/new.php">Admin</a>
        <a href="#about">About</a>
     </ul>
   </div>
   <script>
      // script below is used for removing the active class and reassigning it to the current link clicked on
      $('ul a').click(function() {
         $('ul a').removeClass('active');
         $(this).addClass('active');
      });
   </script>
</body>
</html>
