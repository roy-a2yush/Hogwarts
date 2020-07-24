<!DOCTYPE html>
<html>
<head>
	<title>update Student Details</title>
	<link rel="stylesheet" type="text/css" href="insertd.css">
</head>
<body>
	<div class="Menu">
		<ul>
	 		<li><a class="active" href="process.php">Home</a></li>
	  		<li><a href="insert.php">Insert</a></li>
	  		<li><a href="update.php">Update</a></li>
	  		<li><a href="delete.php">Delete</a></li>
	  		<li><a href="peek.php">Peek</a></li>
		</ul>
	</div>
	<div class="loginbox" style="margin-bottom: 1%;margin-top: 2%;">
		<form action="#" method="POST">
			<img src="p2.png" class="avatar">
			<p>Enter the Student ID</p>
			<input type="number" name="Tid" placeholder="9">
			<br><br>
			<h3 style="color: red;">New Fields</h3>
			<br><br>
			<p>New Name</p>
			<input type="text" name="FName" placeholder="Enter First Name">
			<p>New Phone number</p>
			<input style="background: #000; color: #fff; border: none; border-bottom: 1px solid #fff;background: transparent; outline: none; height: 40px; color: #fff;	font-size: 16px;" type="tel" placeholder="Phone no" name="phoneNo"  pattern="[0-9]{10}" title="Enter your Phone no." required/>
			<p>New email</p>
			<input type="email" name="email" placeholder="abc@xyz.com">
			<p>New Class</p>
			<input type="number" name="deptAlloted" placeholder="9">
			<br><br>
			<p>Enter your password</p>
			<input type="password" name="pass">
			<br><br>
			<input type="submit" name="submit" value="UPDATE">
		</form>
	</div>
	<div class = "logout">
	<a href="login.php">
  		<img src="p3.png" alt="Logout" style="width:50px;height:42px;border:0;position: fixed;top: 8px;right: 16px;font-size: 18px;">
	</a>
</div>
</body>
</html>



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

	

	//$result = mysqli_query($con,$sql);
	//	if($result)
		//{
		//	echo "new record is inserted successfully";
		//}


	if(isset($_POST['FName']) && isset($_POST['phoneNo']) && isset($_POST['email']) && isset($_POST['Tid'])&& isset($_POST['deptAlloted']) && isset($_POST['pass']))
	{
		//entering
		$Fname=$_POST['FName'];
		$phoneNo=$_POST['phoneNo'];
		$email=$_POST['email'];
		$deptAlloted=$_POST['deptAlloted'];
		$Tid=$_POST['Tid'];
		$pass=$_POST['pass'];
		

		$sql = "select * from Hogwarts.login where uname='admin' AND pass='".$pass."' limit 1";

		$result=mysqli_query($con,$sql);

		if (mysqli_num_rows($result)==1)
		{
			$sql = "UPDATE `Student` SET `name`='$Fname',`phoneno`='$phoneNo',`email`='$email',`class`=$deptAlloted WHERE id = $Tid;";
			$result = mysqli_query($con,$sql);	
			if($result)
			{
				?> <div style= "width:50px;height:42px;border:0;position: fixed;top: 20%; left: 3%;font-size: 18px;">
		<font color="white"><?php echo "Record updated successfully";?></font></div><?php
			}
			else
			{
				?> <div style= "width:50px;height:42px;border:0;position: fixed;top: 20%; left: 3%;font-size: 18px;">
		<font color="white"><?php echo "Record not updated";?></font></div><?php
			}
		}
		else
		{
			?> <div style= "width:50px;height:42px;border:0;position: fixed;top: 20%; left: 3%;font-size: 18px;">
		<font color="white"><?php echo "Password Incorrect";?></font></div><?php
		}

	}
 ?>