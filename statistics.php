
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

	//$sql="SELECT count(teamid) from marks where marks.marks>0";
	//$result=mysqli_query($con,$sql) or die(mysqli_error($con));

	//$sql1="SELECT count(teamid) from marks where marks.marks=0";
	//$result1=mysqli_query($con,$sql1) or die(mysqli_error($con));
	
 ?>


<!DOCTYPE html>
<html>
<head>
	<title>statistics</title>
	<link rel="stylesheet" type="text/css" href="login.css">
	
</head>
<body>
	<div class="Menu">
		<ul>
	 		<li><a class="active" href="teacher_dashboard.php">Home</a></li>
	  		
		</ul>
	</div>
	<div class="loginbox" align="center" style="width: 600px">
	<img src="p2.png" class="avatar">
		<p style="padding-left: 210px; font-weight: bold; font-size: 7;"><h1>Statistics:</h1></p>
		<!-- graphical rep-->
		<br><br><br><br><br><br>
	
		<button style="border: none;outline: none;height: 40px;width:60%;background: #fb2525;color: #fff;font-size: 18px;border-radius: 20px;"> Submitted projects : <!--add php to count here-->
		</button><br><br>
		<button style="border: none;outline: none;height: 40px;width:60%;background: #fb2525;color: #fff;font-size: 18px;border-radius: 20px;">In-progress projects: <!--add php to count here--></button><br><br>

	</div>


	<a href="login.php">
  		<img src="p3.png" alt="Logout" style="width:50px;height:42px;border:0;position: fixed;top: 8px;right: 16px;font-size: 18px;">
	</a>
</body>
</html>

