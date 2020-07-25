
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
		<!-- alloted button if alloted!=0-->
		<?php 
			$sql="SELECT teamid from team where approval=0 and teamid='$teamid'";
			$result = $con->query($sql);

			if ($result->num_rows > 0)
			{
       			while($row = $result->fetch_assoc())
    			{
    			
		?>
		<form action="approve.php">
			<button class="button"  style="border: none;outline: none;height: 40px;width:60%;background: #fb2525;color: #fff;font-size: 18px;border-radius: 20px;" >APPROVE PROJECT</button></form>
		<?php }} ?>

		<!--review 1 button if not done/ review 1 marks -->
		<?php 
			$sql="SELECT teamid from marks where review1=0 and teamid='$teamid'";
			$result = $con->query($sql);
			$_SESSION['no']=1;
			if ($result->num_rows > 0)
			{
       			while($row = $result->fetch_assoc())
    			{
    			
		?>
		
			<a href="review1.php?no=1"><button class="button"  style="border: none;outline: none;height: 40px;width:60%;background: #fb2525;color: #fff;font-size: 18px;border-radius: 20px;" >Review 1</button></a><br><br>
		<?php }} 
		?>


		<!--review 2 button if not done/ review 1 marks -->
		<?php 
			$sql="SELECT teamid from marks where review2=0 and teamid='$teamid'";
			$result = $con->query($sql);
			$_SESSION['no']=2;
			if ($result->num_rows > 0)
			{
       			while($row = $result->fetch_assoc())
    			{
    			
		?>
		<a href="review1.php?no=2">
			<button class="button"  style="border: none;outline: none;height: 40px;width:60%;background: #fb2525;color: #fff;font-size: 18px;border-radius: 20px;" >Review 2</button></a><br>
		<?php }} 
		?>


		<!--review 3 button if not done/ review 1 marks -->
		<?php 
			$sql="SELECT teamid from marks where review3=0 and teamid='$teamid'";
			$result = $con->query($sql);
			$_SESSION['no']=3;
			if ($result->num_rows > 0)
			{
       			while($row = $result->fetch_assoc())
    			{
    			
		?>
		
			<a href="review1.php?no=3"><button class="button"  style="border: none;outline: none;height: 40px;width:60%;background: #fb2525;color: #fff;font-size: 18px;border-radius: 20px;" >Review 3</button></a><br><br>
		<?php }} ?>


		<!--Completed button-->

		<?php 
			$sql="SELECT teamid from team where completed=0 and teamid='$teamid'";
			$result = $con->query($sql);

			if ($result->num_rows > 0)
			{
       			while($row = $result->fetch_assoc())
    			{
    			
		?>
		<form action="completed.php">
			<button class="button"  style="border: none;outline: none;height: 40px;width:60%;background: #fb2525;color: #fff;font-size: 18px;border-radius: 20px;" >Project Reviewed</button></form>
		<?php }} ?>

		
	</div>


	<a href="login.php">
  		<img src="p3.png" alt="Logout" style="width:50px;height:42px;border:0;position: fixed;top: 8px;right: 16px;font-size: 18px;">
	</a>
</body>
</html>

