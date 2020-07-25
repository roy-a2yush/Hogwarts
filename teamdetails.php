
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
	//$teamid=$_SESSION['teamid'];
    $teacher=$_GET['teamid'];
    $teamid=$teacher;
    $_SESSION['teamid']=$teamid;  			

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
		<?php
		$sql="SELECT teamname,fileaddress,pstatement from team where teamid='$teamid'";
		$result = $con->query($sql);

			if ($result->num_rows > 0)
			{
       			while($row = $result->fetch_assoc())
    			{
		?>
		<b>Team name : </b><?php
			echo $row['teamname'];

		?>
		<br> <br><br>



		<b>File address : </b><a> <?php
			echo $row['fileaddress'];

		?></a>
		<br> <br><br>

		<b>Problem statement :</b><?php
			echo $row['pstatement'];

		}}?> <br><br><br><?php
		$sql1="SELECT name from student s,team t where s.id=t.Sid1 and t.teamid='$teamid' ";
		$sql2="SELECT name from student s,team t where s.id=t.Sid2 and t.teamid='$teamid' ";
		$sql3="SELECT name from student s,team t where s.id=t.Sid3 and t.teamid='$teamid' ";
		$sql4="SELECT name from student s,team t where s.id=t.Sid4 and t.teamid='$teamid' ";
		$result = $con->query($sql1);
		?>
			<b>Student names:</b><br><br> <a> <?php
			if ($result->num_rows > 0)
			{
       			while($row = $result->fetch_assoc())
    			{
    				echo $row['name'];
    				?></a>
					<br>
				<?php }
			}
		
		$result = $con->query($sql2);
		?>
			<a> <?php
			if ($result->num_rows > 0)
			{
       			while($row = $result->fetch_assoc())
    			{
    				echo $row['name'];
    				?></a>
					
					<br>
				<?php }
			}
		
		$result = $con->query($sql3);
		?>
			<br> <a> <?php
			if ($result->num_rows > 0)
			{
       			while($row = $result->fetch_assoc())
    			{
    				if(!empty($row['name'])){
    				echo $row['name'];

    			}
    				?></a>
					<br> 
				
				<?php }
			}
		
		$result = $con->query($sql4);
		?>
			<br> <a> <?php
			if ($result->num_rows > 0)
			{
       			while($row = $result->fetch_assoc())
    			{
    				if(!empty($row['name'])){
    				echo $row['name'];
    				?></a>
					<br>
					<?php } 
				}
			}
		?>
		<br> <br>
		
		
		<form action="teacherView.php">
			<button class="button"  style="border: none;outline: none;height: 40px;width:60%;background: #fb2525;color: #fff;font-size: 18px;border-radius: 20px;" >VIEW</button></form>

			
		
	</div>


	<a href="login.php">
  		<img src="p3.png" alt="Logout" style="width:50px;height:42px;border:0;position: fixed;top: 8px;right: 16px;font-size: 18px;">
	</a>
</body>
</html>

