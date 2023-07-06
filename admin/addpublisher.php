<?php
require('dbconnect.php') ?>

<!DOCTYPE html>
<head>
    <link rel="stylesheet" href="s.css">
    <body>
        <h1 style="font-family: 'Lucida Sans', 'Lucida Sans Regular', 'Lucida Grande', 'Lucida Sans Unicode', Geneva, Verdana, sans-serif ; font-weight: bold;">
           Add A Publisher
        </h1>


    <form  method="post" style="font-weight: bold">
        Publisher Name: 
        <input type="text" name="publishername" id ="username" style="margin-left: 40.0px;" required ="" placeholder="Publisher Name">
        <br>
        <br>
        
        Mobile Number:  
        <input type="text" name="mobile" id="mobile" placeholder="Mobile" style="margin-left: 40.0px;">
        <br><br>
        Address :
        <input type="text" name="address" id="address" placeholder="Address" style="margin-left: 90.0px;">
        <br><br>
        <input type="submit" name="sub" style="margin-left: 5cm;" rows="8" cols="30">

    </form>
    </body>

    <?php

    if(isset($_POST['sub'])){
        
        $pubname = $_POST['publishername'];
        $mob = $_POST['mobile'];
        $add= $_POST['address'];
        $sql = "Insert into publisher(publishername,mobile,address) values('$pubname','$mob','$add')";
        if($conn->query($sql) == true){
			
            echo "<script type='text/javascript'>alert('Publisher Added')</script>";
}
		
		else{
			echo "Error".$conn->error;
		}

    }


    ?>

<br>
    <div class="button" onclick="document.location= 'index.php'" style="margin-left:17cm ;">
        <span>Back To Main Menu</span>
    </div>




</head>