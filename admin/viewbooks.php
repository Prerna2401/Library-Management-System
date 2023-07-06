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
    View All Books
  </h1>


<table border ="1" cellspacing="0" cellpadding="10" style="margin-left: 13.5cm;margin-top:3cm">
  <tr>
    <th>Book ID</th>
    <th>Title</th>
    <th>Author</th>
    <th>Publication</th>
    <th>Availability</th>
  </tr>
<?php
   /* $sql = "Select * from  books";
    $result = $conn->query($sql);
  while($row = $result->fetch_assoc()) { */
    
    $res = $conn->query('CALL show_all_books()');
    while($row = $res->fetch_assoc()){
 ?>
 <tr>  
     <?php
    
     ?>
     
   <td><?php echo $row['bookid']; ?> </td>
   <td><?php echo $row['title']; ?> </td>
   <td><?php echo $row['author']; ?> </td>

   <td><?php echo $row['publishername']; ?> </td>
   <td><?php echo $row['availability']; }?></td>
  </tr>

   
 </table>

 <div class="button" onclick="document.location='index.php'" style="margin-left: 17cm;margin-top:0.6cm">
      <span>Back To Main Menu</span>

</div>


</body>

</html>