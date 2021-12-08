<html>
<head>
        <link rel="stylesheet" href="add.css" type="text/css" />
        <title>AddData</title>
</head>
<body>
        <?php include 'select.php'?>
        <br><br>
        <?php if($_GET['addition']==1):?>
        <div>
                <br><br>
                <sub>Add Event</sub>
                <br><br>
                <form action=" " method="post">
                        Name: <input type="text" name="eventName" placeholder="Meet the Sisters"><br><br>
                        Org Hosting: <input type="text" name="orgName" placeholder="Sigma Tigma Figma"><br><br>
                        Date: <input type="text" name="date" placeholder="06-66-20XX"><br><br>
                        Location: <input type="text" name="location" placeholder="HS 143"><br><br>
                        Time: <input type="text" name="time" placeholder="2:00p"><br><br>
                        <br><input type="Submit" value="Submit"><br>
                </form>
                <?php
                        $con=@mysqli_connect('localhost','wtownsend2','#paraSwimmer16','SUGreekLifeDB');

                        $event=$_POST['eventName'];
                        $org=$_POST['orgName'];
                        $date=$_POST['date'];
                        $loc=$_POST['location'];
                        $time=$_POST['time'];

                        $query1="insert into Events values('$event','$date','$loc','$time');";
                        $query2="insert into held_by values('$event','$date','$loc','$org');";
                        $rs1=mysqli_query($con,$query1);
                        $rs2=mysqli_query($con,$query2);

                        if($event!=null && $date!=null && $loc!=null && $time!=null && $org!=null){
                                if($rs1&&$rs2)
                                        print "Insertion Sucessful!";
                                else{
                                        if($rs1)
                                                mysqli_query($con,"delete from Events where name='$event' and date='$date' and location='$loc' and time='$time';");
                                        if($rs2)
                                                mysqli_query($con,"delete from held_by where orgName='$org' and eventName='$event' and eventDate=$date and eventLocation='$loc';");
                                        print "Failed to Insert!";
                                }
                        }
                        mysqli_close($con);
                ?>
                <br><br>
        </div>
        <?php endif;?>
        <?php if($_GET['addition']==2):?>
        <div>
                <br><br>
                <sub>Add Organization</sub>
                <form action=" " method="post">
                        <br><br>
                        Name: <input type="text" name="orgName" placeholder="Sigma Tigma Figma"><br><br>
                        Colors: <input type="text" name="colors" placeholder="Blue and Grey"><br><br>
                        Type: <select name="type" id="type">
                                <option value="Fraternity">Fraternity</option>
                                <option value="Sorority">Sorority</option>
                                <option value="Co-Ed">Co-Ed</option>
                        </select>
                        <br><br>
                        Quota: <input type="number" id="quota" name="quota" min="0" max="99999999999"><br><br>
                        Dues: <input type="number" id="dues" name="dues" min="0" max="99999999999"><br><br>
                        Member #: <input type="number" id="memNum" name="memNum" min="0" max="99999999999"><br><br>
                        Motto: <input type="text" name="motto" placeholder="Let Go already!"><br><br>
                        Advisor Email: <input type="text" name="advEmail" placeholder="example@salisbury.edu"><br><br>
                        Philantropy: <input type="text" name="pName" placeholder="Life of Giving"><br><br>
                        Council: <input type="text" name="cName" placeholder="The Git Gods"><br><br>
                        <br><input type="Submit" value="Submit"><br>
                </form>
                <?php
                        $con=@mysqli_connect('localhost','wtownsend2','#paraSwimmer16','SUGreekLifeDB');

                        $orgName=$_POST['orgName'];
                        $colors=$_POST['colors'];
                        $type=$_POST['type'];
                        $quota=$_POST['quota'];
                        $dues=$_POST['dues'];
                        $memNum=$_POST['memNum'];
                        $motto=$_POST['motto'];
                        $advEmail=$_POST['advEmail'];
                        $pName=$_POST['pName'];
                        $cName=$_POST['cName'];

                        if($orgName!=null && $colors!=null && $type!=null && $quota!=null && $dues!=null && $advEmail!=null && $memNum!=null && $motto!=null && $pName!=null && $cName!=null){
                                $query="insert into Organizations values('$orgName','$colors','$type',$quota,$dues,$memNum,'$motto','$advEmail','$pName','$cName');";
                                if(mysqli_query($con,$query))
                                        print "Insertion Sucessful!";
                                else
                                        print "Failed to Insert";
                        }
                        mysqli_close($con);
                ?>
                <br><br>
        </div>
        <?php endif;?>
        <?php if($_GET['addition']==3):?>
        <div>
                <br><br>
                <sub>Add Advisor</sub>
                <form action=" " method="post">
                        <br><br>
                        Advisor ID: <input type="number" id="id" name="id" min="0" max="99999999999"><br><br>
                        Advisor Name: <input type="text" name="name" placeholder="Jane Doe"><br><br>
                        Advisor Department: <input type="text" name="dept" placeholder="Computer Science"><br><br>
                        Advisor Email: <input type="text" name="email" placeholder="example@gmail.com"><br><br>
                        <br><input type="Submit" value="Submit"><br>
                </form>
                <?php
                        $con=@mysqli_connect('localhost','wtownsend2','#paraSwimmer16','SUGreekLifeDB');

                        $id=$_POST['id'];
                        $name=$_POST['name'];
                        $dept=$_POST['dept'];
                        $email=$_POST['email'];

                        $query="insert into Advisor values('$name',$id,'$dept','$email');";
                        if($id!=null && $name!=null && $dept!=null && $email!=null){
                                if(mysqli_query($con,$query))
                                        print "Insertion Sucessful!";
                                else
                                        print "Failed to insert";
                        }
                        mysqli_close($con);
                ?>
                <br><br>
        </div>
        <?php endif;?>
        <?php if($_GET['addition']==4):?>
        <div>
                <br><br>
                <sub>Add Philanthropy</sub>
                <form action=" " method="post">
                        <br><br>
                        Name: <input type="text" name="pName" placeholder="Think Pink"><br><br>
                        Donations: <input type="number" id="donations" name="donations" min="0" max="99999999999"><br><br>
                        <br><input type="Submit" value="Submit"><br>
                </form>
                <?php
                        $con=@mysqli_connect('localhost','wtownsend2','#paraSwimmer16','SUGreekLifeDB');

                        $pName=$_POST['pName'];
                        $don=$_POST['donations'];

                        $query="insert into Philanthropy values('$pName',$don);";
                        if($pName!=null && $don!=null){
                                if(mysqli_query($con,$query))
                                        print "Insertion Sucessful!";
                                else
                                        print "Failed to Insert!";
                        }
                        mysqli_close($con);
                ?>
                <br><br>
        </div>
        <?php endif;?>
        <?php if($_GET['addition']==5):?>
        <div>
                <br><br>
                <sub>Add Corporation</sub>
                <br><br>
                <form action=" " method="post">
                        Name: <input type="text" name="corpName" placeholder="Toys n Stuff"><br><br>
                        Service Type: <input type="text" name="servType" placeholder="Childhood Joy"><br><br>
                        Associated Organization: <input type="text" name="org" placeholder="Sigma Tigma Figma"><br><br>
                        <br><input type="Submit" value="Submit"><br>
                </form>
                <?php
                        $con=@mysqli_connect('localhost','wtownsend2','#paraSwimmer16','SUGreekLifeDB');

                        $corpName=$_POST['corpName'];
                        $type=$_POST['servType'];
                        $org=$_POST['org'];

                        $query1="insert into Corporation values('$corpName','$type');";
                        $query2="insert into works_with values('$org','$corpName');";
                        $rs1=mysqli_query($con,$query1);
                        $rs2=mysqli_query($con,$query2);

                        if($corpName!=null && $type!=null && $org!=null){
                                if($rs1&&$rs2)
                                        print "Insertion Sucessful!";
                                else{
                                        if($rs1)
                                                mysqli_query($con,"delete from Corporations where name='$corpName' and service_type='$type';");
                                        elseif($rs2)
                                                mysqli_query($con,"delete from works_with where orgName='$org' and corpName='$corpName';");
                                        print "Failed to Insert!";
                                }
                        }
                        mysqli_close($con);
                ?>
                <br><br>
        </div>
        <?php endif;?>
        <?php if($_GET['addition']==6):?>
        <div>
                <br><br>
                <sub>Add Council</sub>
                <br><br>
                <form action=" " method="post">
                        Name: <input type="text" name="cName" placeholder="The Git Gods"><br><br>
                        # of Organizations: <input type="number" id="orgNum" name="orgNum" min="0" max="99999999999"><br><br>
                        <br><input type="Submit" value="Submit"><br>
                </form>
                <?php
                        $con=@mysqli_connect('localhost','wtownsend2','#paraSwimmer16','SUGreekLifeDB');

                        $cName=$_POST['cName'];
                        $orgNum=$_POST['orgNum'];

                        $query="insert into Councils values('$cName',$orgNum);";
                        if($cName!=null && $orgNum!=null){
                                if(mysqli_query($con,$query))
                                        print "Insertion Sucessful!";
                                else
                                        print "Failed to Insert!";
                        }
                        mysqli_close($con);
                ?>
                <br><br>
        </div>
        <?php endif;?>
        <?php if($_GET['addition']==7||!isset($_GET['addition'])):?>
        <div>
                <br><br>
                <sub>Add Current Member</sub>
                <?php if ($_GET['gb']!='yep'&&$_GET['gb']!='nope'):?>
                <form action=" ">
                        <br><br>Are they a part of the governing body of their Organization?<br><input type="radio" id="gb" name="gb" value="yep">
                        <label for="gb">Yes</label>
                        <input type="radio" id="not" name="gb" value="nope">
                        <label for="not">No</label><br><br>
                        <input type="submit" value="Submit"><br>
                <?php endif; ?>

                <?php if ($_GET['gb']=='yep'||$_GET['gb']=='nope'):?>
                <br><br>
                <form action=" " method="post">
                        Name: <input type="text" name="name" placeholder="Joe Fernandez"><br><br>
                        ID: <input type="number" id="id" name="id" min="0" max="99999999999"><br><br>
                        Volunteer Hours: <input type="number" id="hours" name="hours" min="0" max="99999999999"><br><br>
                        Email: <input type="text" name="email" placeholder="example@gulls.salisbury.edu"><br><br>
                        Organization: <input type="text" name="org" placeholder="Sigma Tigma Figma"><br><br>
                        <?php if($_GET['gb']=='yep'): ?>
                                Position: <input type="text" name="pos" placeholder="President"><br><br>
                                Years Held: <input type="number" id="years" name="years" min="0" max="99999999999"><br><br>
                        <?php endif; ?>
                        <br><input type="Submit" value="Submit"><br>
                </form>
                <?php
                        $con=@mysqli_connect('localhost','wtownsend2','#paraSwimmer16','SUGreekLifeDB');

                        $name=$_POST['name'];
                        $id=$_POST['id'];
                        $volHour=$_POST['hours'];
                        $email=$_POST['email'];
                        $org=$_POST['org'];
                        $pos=$_POST['pos'];
                        $years=$_POST['years'];

                        $query="insert into Students values('$name',$id,$volHour,'$email','$org');";
                        $result1=mysqli_query($con,$query);
                        if($name!=null && $id!=null && $volHour!=null && $email!=null && $org!=null && $pos!=null && $years!=null){
                                if(isset($pos)||isset($years)){
                                        $extraQuery="insert into governing_body values($id,'$org','$pos',$years);";
                                        $result2=mysqli_query($con,$extraQuery);
                                        if($result1&&$result2)
                                                print "Insertion Sucessful!";
                                        else{
                                                if(!$result1)
                                                        mysqli_query($con,"delete from governing_body where id=$id and orgName='$org' and position='$pos' and years_held='$years';");
                                                elseif(!$result2)
                                                        mysqli_query($con,"delete from Students where name='$name' and id=$id and volunteer_hrs=$volHour and email='$email' and orgName='$org';");
                                                print "Failed to insert";
                                        }
                                }
                                else{
                                        if($result1)
                                                print "Insertion Successful!";
                                        else
                                                print "Failed to Insert!";
                                }
                        }
                        mysqli_close($con);
                ?>
                <?php endif;?>
                <br><br>
        </div>
        <?php endif;?>
        <?php if($_GET['addition']==8):?>
        <div>
                <br><br>
                <sub>Add PNMs</sub>
                <br><br>
                <form action=" " method="post">
                        Name: <input type="text" name="name" placeholder="John Doe"><br><br>
                        ID: <input type="number" id="id" name="id" min="0" max="99999999999"><br><br>
                        Event: <input type="text" name="event" placeholder="Meet the Brothers"><br><br>
                        Event Location: <input type="text" name="location" placeholder="HS 143"><br><br>
                        Event Date: <input type="text" name="date" placeholder="06-66-2021"><br><br>
                        <input type="Submit" value="Submit"><br><br>
                </form>
                <?php
                        $con=@mysqli_connect('localhost','wtownsend2','#paraSwimmer16','SUGreekLifeDB');

                        $event=$_POST['event'];
                        $name=$_POST['name'];
                        $id=$_POST['id'];
                        $loc=$_POST['location'];
                        $date=$_POST['date'];

                        $query="insert into PNMs values($id,'$name','$event','$date','$loc');";

                        if($id!=null && $name!=null && $event!=null && $date!=null && $loc!=null){
                                if(mysqli_query($con,$query))
                                        print "Insertion Sucessful!";
                                else
                                        print "Failed to Insert!";
                        }
                        mysqli_close($con);
                ?>
        </div>
        <?php endif;?>
        <br><br>
</body>
<footer>
        <div class="boxText">
                Use this to add different data into the data base. Note: if something fails to insert it is one of three things. The data already exists, the data is in the wrong format, or that at least one attribute of
                the data needs to already exist in the database.
        </div>
        <br><br>
        <img  src ="https://cosida.com/common/controls/image_handler.aspx?thumb_id=0&image_path=/images/2019/2/21/SalisburyLogo.png" alt = "Salisbury University Sammy the Seagull" style="width:200px;height:200px;">
</footer>
</html>                                                    
