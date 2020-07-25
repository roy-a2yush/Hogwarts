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
	$username = $_SESSION['username'];
	$sql="SELECT * FROM `team` WHERE teamid = $ID";
	$result = $con->query($sql);
	if ($result->num_rows > 0)
	{
		while($row = $result->fetch_assoc())
		{
			$Sid1=$row['Sid1'];
			$tid=$row['tid'];
			$teamid=$row['teamid'];
			$teamname=$row['teamname'];
			$fileaddress=$row['fileaddress'];
			$pstatement=$row['pstatement'];
			$approval=$row['approval'];
			$completed=$row['completed'];
			$Sid2=$row['Sid2'];
			$Sid3=$row['Sid3'];
			$Sid4=$row['Sid4'];
		}
    }
    $_SESSION['username']=$username;
    //$_SESSION['class']=$class;	
    $_SESSION['ID']=$ID;
 ?>

<!DOCTYPE html>
<html>
<head>
	<title>Student Account</title>
	<link rel="stylesheet" type="text/css" href="login.css">
</head>
<body>
	<div class="loginbox">
		<img src="p2.png" class="avatar">
		<h1>Welcome <strong><?php echo "$teamname" ?></strong></h1>
		<br>
		<form action="#" method="POST">
			<input type="submit" name="change" value="Upload" formaction="files.php">
			<input type="submit" name="change" value="Status" formaction="teamStatus.php">
			<input type="submit" name="change" value="Change password" formaction="changeStu.php">
		</form>
	</div>
	<a href="logout.php">
  		<img src="p3.png" alt="Logout" style="width:50px;height:42px;border:0;position: fixed;top: 8px;right: 16px;font-size: 18px;">
	</a>
</body>
</html>