
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="s1.css">
	<title></title>
	
		<?php
	
		$usn = $_POST['username'];
		$em = $_POST['emailid'];
		$pass = $_POST['password'];
		$mob =$_POST['mobile'];
		$usid = random_int(10000,100000);
		//$gen = $_POST['gender'];
		//$pref = $_POST['genre'];
		//$f = $_POST['file'];
		$desc = $_POST['description'];
		
		?>
	
	<h2>
		<th><?php
		echo "username : $usn"; ?></th>
		<tr><?php
		echo "Email ID is $em <br>"; ?></tr>
		<?php
		echo " Your Mobile : $mob<br>";
		//echo "Your Gender : $gen <br>";
		echo "Description : $desc";	


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
		?>
		


	</h2>
	<h1>
		Trying To insert data<br>
	</h1>

	<h2>
		<?php
		$sql = "INSERT INTO member(userid,password,username,phone,email) VALUES('$usid','$pass','$usn',$mob,'$em')";
		if($conn->query($sql) == true){
			echo "Insertion Succesful";
		}
		else{
			echo "Error".$conn->error;
		}
		?>
	</h2>
	
	
</head>
<body>

</body>
</html>

