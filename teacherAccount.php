<?php 

session_start();

$host="localhost";
$user="root";
$password="";
$db="Hogwarts";

$con=mysqli_connect("localhost","root","");
mysqli_select_db($con,$db);


	$ID = $_SESSION['ID'];
	if($ID == null) {
		header("Location: logout.php");
	}
	$sql="SELECT * FROM `Teacher` WHERE tid = $ID";
	$result = $con->query($sql);
	if ($result->num_rows > 0)
	{
		while($row = $result->fetch_assoc())
		{
			$fname=$row['name'];
			$phoneNo=$row['phoneNo'];
			$email=$row['email'];
			$username=$row['username'];
		}
    }
    $_SESSION['username']=$username;
    $_SESSION['ID']=$ID;
 ?>

<!DOCTYPE html>
<html>
<head>
	<title>Teacher Account</title>
	<link rel="stylesheet" type="text/css" href="login.css">
</head>
<body>
	<div class="loginbox">
		<img src="p2.png" class="avatar">
		<h1>Welcome <strong><?php echo "$fname" ?></strong></h1>
		<br>
		<form action="#" method="POST">
			<input type="submit" name="change" value="Teams" formaction="peekMarks.php">
			<input type="submit" name="Marks" value="Statistics" formaction="enterMarks.php">
			<input type="submit" name="change" value="Change password" formaction="change.php">
		</form>
	</div>
	<a href="logout.php">
  		<img src="p3.png" alt="Logout" style="width:50px;height:42px;border:0;position: fixed;top: 8px;right: 16px;font-size: 18px;">
	</a>
</body>
</html>