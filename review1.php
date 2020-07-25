
<?php 


	$host = "localhost";
	$user="root";
	$password="";
	$db="Hogwarts";

	$con=mysqli_connect("localhost","root","","Hogwarts");
	if($con === false)
	{
		echo "Connection failed to establish";
	}

	mysqli_select_db($con,$db);

	session_start();
	$tid=$_SESSION['ID'];
	$teamid=$_SESSION['teamid'];
	$no=$_GET['no'];  			

 ?>


<!DOCTYPE html>
<html>
<head>
	<title>teams</title>
	<link rel="stylesheet" type="text/css" href="login.css">
	
</head>
<body>
	<div class="Menu">
		<ul>
	 		<li><a class="active" href="teacherAccount.php">Home</a></li>
	  		
		</ul>
	</div>
	<div class="loginbox" align="center" style="width: 600px">
	<img src="p2.png" class="avatar">
		<p style="padding-left: 210px; font-weight: bold; font-size: 7;"><h1>Team details:</h1></p><br>
		<!-- team details-->
		<form action="#" method="post">
		<input type="text" name="Review">Enter marks
		<input type="submit" value="submit">
	</form>
		
	</div>


	<a href="login.php">
  		<img src="p3.png" alt="Logout" style="width:50px;height:42px;border:0;position: fixed;top: 8px;right: 16px;font-size: 18px;">
	</a>
</body>
</html>
<?php 
if($no==1){
$marks=$_POST['Review'];
$sql="UPDATE marks set review1='$marks' where teamid='$teamid'";
$result=mysqli_query($con,$sql);

$sql="SELECT * from status where teamid='$teamid'";
$result=mysqli_query($con,$sql);
if(mysqli_num_rows($result)==0)
{
$sql1="INSERT INTO `status` (`statusid`, `teamid`, `review1`, `review2`, `review3`) VALUES (NULL, '$teamid', '$marks', NULL, NULL)";
$result1=mysqli_query($con,$sql1);
}
else{
$sql1="UPDATE status set review1='$marks' where teamid='$teamid'";
$result1=mysqli_query($con,$sql1);
}
}

if($no==2){
$marks=$_POST['Review'];

$sql="UPDATE marks set review2='$marks' where teamid='$teamid'";
$result=mysqli_query($con,$sql);

$sql="SELECT * from status where teamid='$teamid'";
$result=mysqli_query($con,$sql);
if(mysqli_num_rows($result)==0)
{
$sql1="INSERT INTO `status` (`statusid`, `teamid`, `review1`, `review2`, `review3`) VALUES (NULL, '$teamid', NULL, '$marks', NULL)";
$result1=mysqli_query($con,$sql1);
}
else{
$sql1="UPDATE status set review2='$marks' where teamid='$teamid'";
$result1=mysqli_query($con,$sql1);
}
}

if($no==3){
$marks=$_POST['Review'];

$sql="UPDATE marks set review3='$marks' where teamid='$teamid'";
$result=mysqli_query($con,$sql);

$sql="SELECT * from status where teamid='$teamid'";
$result=mysqli_query($con,$sql);
if(mysqli_num_rows($result)==0)
{
$sql1="INSERT INTO `status` (`statusid`, `teamid`, `review1`, `review2`, `review3`) VALUES (NULL, '$teamid', NULL,NULL,'$marks')";
$result1=mysqli_query($con,$sql1);
}
else{
$sql1="UPDATE status set review3='$marks' where teamid='$teamid'";
$result1=mysqli_query($con,$sql1);
}
}
?>
