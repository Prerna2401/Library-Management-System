<!DOCTYPE html>
<html>
    <head>
        <link rel="stylesheet" href="C:\xampp\htdocs\html\s1.css">
    </head>

    <h1>
        User login
    </h1>


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
echo "<br>Connected successfully";
echo $_POST['signin'];

if(isset($_POST['signin'])){

$u=$_POST['username'];
 $p=$_POST['password'];

 $sql="select test.password from member where username='$u'";
 echo "$u";
 echo "$p";
    $result = $conn->query($sql);
    $row = $result->fetch_object();
    echo "$row";
    $x=$row['password'];
echo "$x $p";

if(strcasecmp($x,$p)==0 && !empty($u) && !empty($p))
{
    echo "Login Successful";
 $_SESSION['username']=$u;
 echo "$u";

 if($u == 'admin'){
     header('location:admin/index.php');
 }
 else{
     header('location:user/index.php');
 }

}
}

?>
</html>