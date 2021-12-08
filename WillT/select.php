<html>
<head>
        <link rel="stylesheet" href="add.css" type="text/css" />
        <title>Select Data</title>
        <style>
                button {
                        background-color: #d4af37;
                        border: none;
                        color: black;
                        cursor: pointer;
                        padding: 10px 20px;
                        text-align: center;
                        text-decoration: none;
                        display: inline-block;
                        font-size: 14px;
                }

                footer{background-color: maroon;}

                img {
                        display: block;
                        margin-left: auto;
                        margin-right: auto;
                }
                .boxText{
                        color: black;
                        text-align:center;
                        background-color: #ffcc66;
                        width: 600px;
                        border: 10px solid #d4af37;
                        padding: 40px;
                        margin-top:60px;
                        margin-right: auto;
                        margin-left:auto;
                }
        </style>
</head>
<body>
        <form action="addData.php" method="get">
        <button style="text-align:left;" value='1' name='addition' type="submit" onclick="window.location.href='https://lamp.salisbury.edu/~wtownsend2/COSC386/WillT/addData.php';"> Add Event </button>
        <button style="text-align:left;" value='2' name='addition' type="submit" onclick="window.location.href='https://lamp.salisbury.edu/~wtownsend2/COSC386/WillT/addData.php';"> Add Organization </button>
        <button style="text-align:left;" value='3' name='addition' type="submit" onclick="window.location.href='https://lamp.salisbury.edu/~wtownsend2/COSC386/WillT/addData.php';"> Add Admin </button>
        <button style="text-align:left;" value='4' name='addition' type="submit" onclick="window.location.href='https://lamp.salisbury.edu/~wtownsend2/COSC386/WillT/addData.php';"> Add Philanthropy </button>
        <button style="text-align:left;" value='5' name='addition' type="submit" onclick="window.location.href='https://lamp.salisbury.edu/~wtownsend2/COSC386/WillT/addData.php';"> Add Corporation </button>
        <button style="text-align:left;" value='6' name='addition' type="submit" onclick="window.location.href='https://lamp.salisbury.edu/~wtownsend2/COSC386/WillT/addData.php';"> Add Council </button>
        <button style="text-align:left;" value='7' name='addition' type="submit" onclick="window.location.href='https://lamp.salisbury.edu/~wtownsend2/COSC386/WillT/addData.php';"> Add Current Member </button>
        <button style="text-align:left;" value='8' name='addition' type="submit" onclick="window.location.href='https://lamp.salisbury.edu/~wtownsend2/COSC386/WillT/addData.php';"> Add Potential New Member </button>
        </form>
        <button style="textalign:left; background-color:black; color:white;" onclick="window.location.href=https://lamp.salisbury.edu/~zmoore/COSC386/Zach/admin.php"> Back </button>
</body>
<footer>        
        <?php if($_GET['addition']==0 && $_GET['gb']!='yep' && $_GET['gb']!='nope'):?>
        <div class="boxText">
                Use this to add different data into the data base. Note: if something fails to insert it is one of three things. The data already exists, the data is in the wrong format, or that one attribute of
                the data needs to exist in the database.
        </div>
        <br><br>
        <img  src ="https://cosida.com/common/controls/image_handler.aspx?thumb_id=0&image_path=/images/2019/2/21/SalisburyLogo.png" alt = "Salisbury University Sammy the Seagull" style="width:200px;height:200px;">
        <?php endif;?>
</footer>
</html>
