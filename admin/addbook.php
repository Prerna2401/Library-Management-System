<?php
    require('dbconnect.php');
    ?>


<!DOCTYPE html>
<head>
    <link rel="stylesheet" href="s.css">
    <body>
        <h1 style="font-family: 'Lucida Sans', 'Lucida Sans Regular', 'Lucida Grande', 'Lucida Sans Unicode', Geneva, Verdana, sans-serif ; font-weight: bold;">
           Add A Book
        </h1>


    <form method="post" style="font-weight: bold">
        Book Title :  
        <input type="text" name="title" id ="Title" style="margin-left: 51.0px;" required ="" placeholder="Title" >
        <br>
        <br>
        Author :
        <input type="text" name="author" id="author" style="margin-left: 1.9cm;" required=""  placeholder="Author" class="pwd"> 
        <br>
        <br>

        

       Availability :
        <input type="text" name="availability" id = "availability" style="margin-left: 42px ;"required ="" placeholder="Available" >
        
        <br>
        <br>

    Publisher Id :

    <input type="text" name="pubid" id = "pubid" style="margin-left: 37px ;"required ="" placeholder="Pub Id" >
        
        <br>
        <br>


        
        
        <input type="submit" name="sub" style="margin-left: 5cm;" rows="8" cols="30">

    </form>

    <br>
    <div class="button" onclick="document.location= 'index.php'" style="margin-left:17cm ;">
        <span>Back To Main Menu</span>
    </div>


    </body>

    <?php

    if(isset($_POST['sub'])){
        
        $title = $_POST['title'];
        $author = $_POST['author'];
        $availability= $_POST['availability'];
        $pubid = $_POST['pubid'];
        $sql = "Insert into books(title,author,availability) values('$title','$author','$availability')";
        
       if($conn->query($sql) == true){

        $sql2 = "select * from books where title = '$title'";
        $result = $conn->query($sql2);
        $row = $result->fetch_assoc();
        $bkid = $row['bookid'];
        $sql2 = "Insert into published_by (bookid,publisherid) values ('$bkid','$pubid')";
    }
    else{
        echo "<script type='text/javascript'>alert('Error Adding Book')</script>";

    }
        if( $conn->query($sql2) == true ){
			
            echo "<script type='text/javascript'>alert('Book Added Successfully')</script>";
}
		
		else{
			echo "Error".$conn->error;
		}


    }


    ?>





</head>