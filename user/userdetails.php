<?php require('dbconnect.php'); ?>

<!DOCTYPE html>
<html>
    <head>
        <link rel="stylesheet" href="s.css">
    </head>

    

    <h1>

        <?php
        $r = $_SESSION['username'];
        echo "Welcome Dear $r, To Library Management System " ;
        $sql ="select * from member where username='$r'";

        $result = $conn->query($sql);
       $row = $result->fetch_assoc(); 
       $uid = $row['userid'];
       $mob = $row['phone'];
       $em = $row['email'];
       $usn = $row['username'];
        

        
        
        ?>
    </h1>
    <br><br>
    <div class="box">
        <h2 class="h2" style="margin-left :3.4cm">
    User Name : <?php echo $usn ?>
    <br><br>
    User ID : <?php echo $uid ?>
    <br><br>
    Email ID : <?php echo $em ?>
    <br><br>
    Mobile No : <?php echo $mob ?>
    <br><br>  
<button class="button" onclick="document.location = 'index.php'">
   <span> Back to Main Menu </span>
</button>

</h2>
    </div>
        
    </box>

   


    

</html>