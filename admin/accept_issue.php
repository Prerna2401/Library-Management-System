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
    <th>User ID</th>
    
    <th>Accept / Reject</th>
    
  </tr>
<?php
   /* $sql = "Select * from  books";
    $result = $conn->query($sql);
  while($row = $result->fetch_assoc()) { */
    
    $res = $conn->query('CALL show_all_requests()');
    while($row = $res->fetch_assoc()){
 ?>
 <tr>  
     
    <?php if ($row['duedate'] == '0000-00-00'){ ?>

   <td><?php echo $row['bookid']; 
        $bookid = $row['bookid'];?> </td>
   <td><?php echo $row['userid']; 
        $userid = $row['userid']; ?> </td>
   <td>

            <div class = button>
                <a href="accept_issue_1.php?id1=<?php echo $bookid?>&id2=<?php echo $userid ?>">
                <span>Issue</span></a>
            </div>
            <?php
            //echo "<a href=\"issuebook.php?id=".$bookid."\" class=\"button btn-success \">Issue</a>"?> 
            <div class = button>
                <a href="reject_issue_1.php?id1=<?php echo $bookid?>&id2=<?php echo $userid ?> ">
                <span>Reject</span></a>
            </div>
            <?php }}
            //echo "<a href=\"issuebook.php?id=".$bookid."\" class=\"button btn-success \">Issue</a>"?>
   </td>
  
 
  </tr>

   
 </table>


 <div class="button" onclick="document.location='index.php'" style="margin-left: 17cm;margin-top:0.6cm">
      <span>Back To Main Menu</span>

</div>


</body>



</html>