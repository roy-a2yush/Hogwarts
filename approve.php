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
	$sql="UPDATE team set approval=1 where teamid='$teamid' and tid='$tid'";
	$result = $con->query($sql);
	//$r=mysqli_num_rows($result);
			
			
        			header('Location:'."teamsalloted.php");
        	
        			
	
 ?>
