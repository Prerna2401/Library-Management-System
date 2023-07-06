<?php
require('dbconnect.php');
?>

<?php
require('mysql_db_connect.php');
?>

<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" href="s.css">
</head>

<body>
  <h1>
    View Book History
  </h1>


<table border ="1" cellspacing="0" cellpadding="10" style="margin-left: 14.5cm;margin-top:1.5cm">
  <tr>
    <th>User ID</th>
    <th>Book ID</th>
    <th>Duedate</th>
    <th>Return Date</th>
    <th>Fine</th>
  </tr>
<?php
   /* $sql = "Select * from  books";
    $result = $conn->query($sql);
  while($row = $result->fetch_assoc()) { */
    
    $res = $conn->query('CALL show_book_history()');
    while($row = $res->fetch_assoc()){
 ?>
 <tr>  
     <?php
    
     ?>
     
   <td><?php echo $row['userid']; ?> </td>
   <td><?php echo $row['bookid']; ?> </td>
   <td><?php echo $row['duedate']; ?> </td>
   

   <td>
       <?php  if($row['returndate'] != '0000-00-00'){
       echo $row['returndate']; }
       else{
           echo "Book Not Returned";
       }
       ?> </td>
   <td><?php echo $row['fine']; }?></td>
  </tr>

   
 </table>

 <div class="button" onclick="document.location='index.php'" style="margin-left: 16.5cm;margin-top:0.6cm">
      <span>Back To Main Menu</span>

</div>


</body>

</html>