<!DOCTYPE html>
<html>
<head>
    <link rel = "stylesheet" href="s1.css">
    </head>

<h1 class="h1">
    Library Management Login Page
</h1>
<center>
<form class="login-form" method="post" style="margin-left: 13cm; vertical-align: middle;">
    <h9 class="h9" style="font-size: 18;">
        Login<br><br>
    </h9>
    Username : 
    <input type="text" Name="username" placeholder="Username" required=""><br><br>
    Password  :
				<input type="text" Name="password" placeholder="Password" required="" >
    <br><br>
  <input type="submit" name="signin"  >
    

</form>


<br><br>
<box class="box" style="vertical-align: middle; margin-left: -1.7cm;">



    <h9 class="h9" >
        New User?
    </h9>
    
    <button class="button">
        <a href="" target="_blank" title="Registration Link" class="a" onclick="document.location = 'pag2.html'">
        <span> Register New User </span>
        </a>
    </button>
</box>

</form>
</center>



<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "test";

// Create connection
$conn = new mysqli($servername, $username, $password,$dbname);

// Check connection
if ($conn->connect_error) {
die("Connection failed: " . $conn->connect_error);
}



if(isset($_POST['signin']))
{$u=$_POST['username'];
 $p=$_POST['password'];

 $sql="select * from member where username='$u'";

 $result = $conn->query($sql);
$row = $result->fetch_assoc();
$x=$row['password'];




if(strcasecmp($x,$p)==0 && !empty($u) && !empty($p))
{   session_start();
    echo "Login Successful";
    $_SESSION["username"]=$u;
    echo $_SESSION['username'];

 if($u == 'admin'){
     header('location:admin/index.php');
 }
 else{
     header('location:user/index.php');
 }

}
else{
    echo "<script type='text/javascript'>alert('Error Logging In')</script>";
}

}

?>
</head>







</html>