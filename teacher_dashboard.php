
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
	$tid=$_SESSION['$ID'];
	$sql="SELECT name,email from teacher where tid='$tid'";
	$result = $con->query($sql);

			if ($result->num_rows > 0)
			{
       			while($row = $result->fetch_assoc())
    			{
        			
        			
	
 ?>


<!DOCTYPE html>
<html>
<head>
	<title>teacher dashboard</title>
	<link rel="stylesheet" type="text/css" href="login.css">
	<style>
		.button:hover
		{
			cursor: pointer;
			background: #ffc107;
			color: #000;
		}
	</style>
</head>
<body>
	<div class="Menu">
		<ul>
	 		<li><a class="active" href="#">Home</a></li>
	  		
		</ul>
	</div>
	<div class="loginbox" align="center" style="width: 600px">
	<img src="p2.png" class="avatar">
		<p style="padding-left: 210px; font-weight: bold; font-size: 7;"><h1>Profile Details:</h1></p>
		<!-- add teacher details-->
		<b>Name : <?php
			echo $row['name'];

		?>
		</b><br> <br>
		<b>Email : <?php
			echo $row['email'];
		}}
		?>
			
		</b><br><br><br>
		<form action="teamsalloted.php">
		<button class="button"  style="border: none;outline: none;height: 40px;width:60%;background: #fb2525;color: #fff;font-size: 18px;border-radius: 20px;" >TEAMS</button><br><br>
		</form>
		<form action="statistics.php">
		<button class="button"  style="border: none;outline: none;height: 40px;width:60%;background: #fb2525;color: #fff;font-size: 18px;border-radius: 20px;">STATISTICS</button><br><br>
		</form>
		<form action="change.php">
		<button class="button" style="border: none;outline: none;height: 40px;width:60%;background: #fb2525;color: #fff;font-size: 18px;border-radius: 20px;">Change Password</button><br><br>
		</form>
	</div>


	<a href="login.php">
  		<img src="p3.png" alt="Logout" style="width:50px;height:42px;border:0;position: fixed;top: 8px;right: 16px;font-size: 18px;">
	</a>
</body>
</html>

