<?php require('dbconnect.php') ?>

<!DOCTYPE html>
<html>
    <head>
        <link rel="stylesheet" href="s.css">
    </head>
    <h1>
      All Publishers
    </h1>

<table border ="1" cellspacing="0" cellpadding="10" style="margin-left: 14.5cm;margin-top:3cm">
  <tr>
   
    <th>Publisher Name</th>
    <th>Address</th>
    <th>Mobile</th>
    
  </tr>
  <?php
    
    $res = $conn->query('CALL show_all_publishers()');
    while($row = $res->fetch_assoc()){
 ?>

    <tr>
  
<?php
    
    ?>
    
  <td><?php echo $row['publishername']; ?> </td>
  <td><?php echo $row['mobile']; ?> </td>

  <td><?php echo $row['address']; }?> </td>

 </tr>

  
</table>
<div class="button" onclick="document.location='index.php'" style="margin-left: 15cm;margin-top:0.6cm">
      <span>Back To Main Menu</span>

</div>





</html>
