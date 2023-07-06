<?php
require('dbconnect.php');
?>

<!DOCTYPE html>
<html>
<head>
    <link rel = "stylesheet" href="s.css">

</head>

<?php

$id=$_GET['id1'];
$uid = $_GET['id2'];
echo $id;

$sql = "update borrowed_by set duedate=date_add(curdate(),interval 15 day) where bookid='$id' and userid ='$uid'";
$sql2 = "update borrowed_by_history set duedate=date_add(curdate(),interval 15 day) where bookid='$id' and userid ='$uid'";

$sql1 = "update books set availability = availability -1 where bookid = '$id'";

if($conn->query($sql) == true  && $conn->query($sql1) == true && $conn->query($sql2) == true){
    echo "<script type='text/javascript'>alert('Book Issued Successfully')</script>";
  

}
else{
    echo "<script type='text/javascript'>alert('Failed Issuing Book')</script>";
   

}


?>

<div class="button" onclick="document.location='accept_issue.php'" style="margin-left: 17cm;margin-top:0.6cm">
<align = "center">


      <span>Back To Menu</span>
      </align>

</div>



</html>