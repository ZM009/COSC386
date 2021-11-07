<!DOCTYPE html>
<html>
<head>
   <style>
        body {
           margin: 0px;
        }
        ul {
           list-style-type: none;
           margin: 0px;
           padding: 0px;
        }
        /* styles the navigation bar itself */
        .topnav {
           position: -webkit-sticky; /* Safari */
           position: sticky;
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
   <div class="topnav" id="nav">
     <ul>
        <a class="active" href="https://lamp.salisbury.edu/~wjenkins2/home.php">Home</a>
        <a href="https://lamp.salisbury.edu/~zmoore4/index.php">Login</a>
        <a href="https://lamp.salisbury.edu/~zmoore4/reg.php">Register</a>
        <a href="https://lamp.salisbury.edu/~zmoore4/contact.php">Contact</a>
        <a style="float:right" href="https://lamp.salisbury.edu/~bbogaczyk1/new.php">Admin</a>
        <a href="#about">About</a>
     </ul>
   </div>
   <script>
        $(document).ready(function() {
                $('a').click(function() {
                        $("a.active").removeClass("active");
                        $(this).addClass('active');
                });
        });
   </script>
</body>
</html>
