<?php
    require('dbconnect.php');
    ?>
<!DOCTYPE html>
<html>
<head>
        <link rel="stylesheet" href="s.css">
</head>
<body>

<table border ="1" cellspacing="0" cellpadding="10" style="margin-left: 7.5cm;margin-top:3cm">
  <tr>
    <th>Book ID</th>
    <th>Title</th>
    <th>Author</th>
    <th>Publication</th>
    
    <th>Request</th>
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
     
 

   <td><?php echo $row['bookid']; 
        $bookid = $row['bookid'];?> </td>
   <td><?php echo $row['title']; ?> </td>
   <td><?php echo $row['author']; ?> </td>
     

   <td><?php echo $row['publishername']; ?> </td>
   <td>
   <?php
        if($row['availability'] > 0)
            ?>
            <div class = button>
                <a href="issuebook.php?id=<?php echo $bookid?>">
                <span>Issue</span></a>
            </div>
            <?php
            //echo "<a href=\"issuebook.php?id=".$bookid."\" class=\"button btn-success \">Issue</a>";
                                    ?> 
   </td>
   <td><?php echo $row['availability']; }?></td>
 
   
   

  </tr>

   
 </table>


 <div class="button" onclick="document.location='index.php'" style="margin-left: 17cm;margin-top:0.6cm">
      <span>Back To Main Menu</span>

</div>

</body>



</html>