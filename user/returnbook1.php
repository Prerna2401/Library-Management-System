<?php
require('dbconnect.php');
?>

<!DOCTYPE html>
<html>
<head>
    <link rel = "stylesheet" href="s.css">

</head>

<?php

$id=$_GET['id'];
$uid = $_GET['id2'];


$sql = "update borrowed_by_history set returndate=curdate() where bookid='$id' and userid ='$uid';";
$sql1 = "update books set availability = availability +1 where bookid = '$id'";
$sql2 = "DELETE FROM borrowed_by WHERE bookid='$id' and userid ='$uid';";

if($conn->query($sql) == true && $conn->query($sql1) == true && $conn->query($sql2) == true){
    echo "<script type='text/javascript'>alert('Book Returned Successfully')</script>";
  

}
else{
    echo "<script type='text/javascript'>alert('Failed Returning Book')</script>";
   

}


?>

<div class="button" onclick="document.location='returnbook.php'" style="margin-left: 17cm;margin-top:0.6cm">
<align = "center">


      <span>Back To Menu</span>
      </align>

</div>



</html>