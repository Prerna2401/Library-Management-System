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
$r = $_SESSION['username'];
$sql = "select userid from member where username= '$r'";
$res = $conn->query($sql);
$row = $res->fetch_assoc(); 
$uid = $row['userid'];

$sql2 = "insert into borrowed_by (userid,bookid) values ('$uid','$id')";
$sql3 = "insert into borrowed_by_history (userid,bookid) values ('$uid','$id')";

if($conn->query($sql2) == true && $conn->query($sql3) == true){
    echo "<script type='text/javascript'>alert('Book Requested Successfully')</script>";

}
else{
    echo "<script type='text/javascript'>alert('Only 1 Book Can Be Requested')</script>";

}

?>
<br>
    <div class="button" onclick="document.location = 'requestbook.php'" style="margin-left: 17cm;margin-top:0.6cm">
    <align = "center">
        <span>Request Book</span></align>
</div>

    <br><br>






</html>