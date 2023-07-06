<?php require('dbconnect.php'); 

$un = $_SESSION['username'];
$sql = "select * from member where username = '$un'";
$res =$conn->query($sql);
$row = $res->fetch_assoc();
$uid = $row['userid'];
?>

<!DOCTYPE html>
<html>

<head>
        <link rel="stylesheet" href="s.css">
    </head>


    <h1>
        Return Book Section
    </h1>

    <table border ="1" cellspacing="0" cellpadding="10" style="margin-left: 13.5cm;margin-top:3cm">
  <tr>
    <th>Book Title</th>
    <th>Due Date</th>
    <th>Fine</th>
    <th>Return</th>
    
  </tr>
<?php
   /* $sql = "Select * from  books";
    $result = $conn->query($sql);
  while($row = $result->fetch_assoc()) { */
   
    $sql2 = "select * from borrowed_by where userid = $uid"; 
    $res = $conn->query($sql2);
    while($row = $res->fetch_assoc()){
 ?>
 <tr>  
    <?php
    if($row['duedate'] != '0000-00-00'){
    $bid = $row['bookid'];
    $sql3 = "select title from books where bookid ='$bid'";
    $res1 = $conn->query($sql3); 
    $ti =floor(time());
    $due = strtotime($row['duedate']);
    $diff = ceil((strtotime($row['duedate']) - $ti)/86400);
    while($row1 = $res1->fetch_assoc()){
    ?>
   <td><?php echo $row1['title']; ?> </td>
   <td><?php echo $row['duedate']; ?> </td>
   <td><?php 
   
   if($diff < 0){
       $diff = abs($diff) * 10;
       echo $diff;

       $sqlll = "update borrowed_by set fine = '$diff' where userid = $uid and bookid = $bid;";
       $res6 = $conn->query($sqlll);

   }
   else{

   echo 0;
    }}}?> 
    </td>
    <td> 
    <div class="button">
    <a href="returnbook1.php?id=<?php echo $bid?>&id2=<?php echo $uid?>">
        <span>Return </span>
    </div>    
    
    <?php }?></td>
    
  </tr>

   
 </table>


 <div class="button" onclick="document.location='index.php'" style="margin-left: 17cm;margin-top:0.6cm">
      <span>Back To Main Menu</span>

</div>



</html>