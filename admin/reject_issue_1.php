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

$sql = "delete from borrowed_by where bookid='$id' and userid ='$uid'";


if($conn->query($sql) == true){
    echo "<script type='text/javascript'>alert('Book Rejected Successfully')</script>";

}
else{
    echo "<script type='text/javascript'>alert('Failed Rejecting Book')</script>";

}

?>

<div class="button" onclick="document.location='accept_issue.php'" style="margin-left: 17cm;margin-top:0.6cm">
<align = "center">


      <span>Back To Menu</span>
      </align>

</div>



</html>