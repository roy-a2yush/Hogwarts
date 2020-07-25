
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
		<p style="padding-left: 210px; font-weight: bold; font-size: 7;"><h1>List of teams alloted:</h1></p>
		<!-- list of team names-->
		<?php
		$sql="SELECT teamid,teamname from team where tid='$tid'";
	$result = $con->query($sql);

			if ($result->num_rows > 0)
			{
       			while($row = $result->fetch_assoc())
    			{
    				$teacher=$row['teamid'];
    				?>
			<!--<form action="teamdetails.php?teamid=$teacher" >-->
			<a href="teamdetails.php?teamid=<?php echo $teacher;?>"><button class="button"  style="border: none;outline: none;height: 40px;width:60%;background: #fb2525;color: #fff;font-size: 18px;border-radius: 20px;" ><?php
				echo $row['teamname'];

				//$_SESSION['teamid']=$row['teamid'];

			?></button><br></a>
			<br>
			<!--</form>-->
			<?php }}
			?>
			<br><br><br><br>
			
			
		
	</div>


	<a href="login.php">
  		<img src="p3.png" alt="Logout" style="width:50px;height:42px;border:0;position: fixed;top: 8px;right: 16px;font-size: 18px;">
	</a>
</body>
</html>

