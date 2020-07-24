<!DOCTYPE html>
<html>
<head>
	<title>Insert Student details</title>
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
	<div class = "loginbox" style="margin-top: 5%;margin-bottom: 1% ">
		<img src="p2.png" class="avatar">
		<h1>Student Registration</h1>
		<form action="#" method="POST">
			<p>Name</p>
			<input type="text" name="FName" placeholder="Enter Name">
			<p>Phone number</p>
			<input style="background: #000; color: #fff; border: none; border-bottom: 1px solid #fff;background: transparent; outline: none; height: 40px; color: #fff;	font-size: 16px;" type="tel" placeholder="Phone no" name="phoneNo"  pattern="[0-9]{10}" title="Enter your Phone no." required/>
			<p>Gender</p><br>
  			<input type="radio" name="gender" value="male" id="gender" > <font size="2">Male</font><br>
  			<input type="radio" name="gender" value="female" id="gender" > <font size="2">Female</font><br>
  			<input type="radio" name="gender" value="other" id="gender" > <font size="2">Other</font>
  			<br>
  			<br>
  			<p>email</p>
			<input type="email" name="email" placeholder="abc@xyz.com">
			<p>Class</p>
			<input type="number" name="DepartmentAllotted" placeholder="7">
			<input type="Submit" name="submit" value="Submit">
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


	if(isset($_POST['FName']) && isset($_POST['phoneNo']) && isset($_POST['gender']) && isset($_POST['email']) && isset($_POST['DepartmentAllotted']))
	{
		//entering
		$Fname=$_POST['FName'];
		$phoneNo=$_POST['phoneNo'];
		if($_POST['gender']=="female"){
			$gender="f";
		}
		elseif ($_POST['gender']=="male") {
			$gender="m";
		}
		else{
			$gender="o";
		}
		$email=$_POST['email'];
			/*if($password2==$password1)
			{*/
				//$sql = "INSERT INTO `login`(`uname`, `pass`, `Sid`) VALUES ('$username','$password1',0)";
				//$result = mysqli_query($con,$sql);	

				/*$sql = "INSERT INTO `Student`(`name`,`phoneno`, `email`, `username`) VALUES ('$Fname','$phoneNo','$email','$username')";
				$result = mysqli_query($con,$sql);*/

				$sql = "INSERT INTO `student` (`id`, `name`, `email`, `class`, `phoneno`, `teamid`) VALUES (NULL, '$Fname', '$email', NULL, '$phoneNo', NULL)";
				$result = mysqli_query($con,$sql);
				
				/*$sql="SELECT `id` FROM `Student` WHERE username = '$username'";
				$result = $con->query($sql);
				if ($result->num_rows > 0)
				{
					while($row = $result->fetch_assoc())
					{
						$Tid=$row['id'];
					}
				}
				else
				{
					echo "Could not insert the data some  fields may be improper";
				}*/
				/*$sql="UPDATE login SET SchoolID=$Tid where uname = '$username'";
				$result= mysqli_query($con,$sql);
				$sql2 = "INSERT INTO `Marks`(`Sid`, `class`) VALUES ($Tid,$deptAlloted)";
				$result1= mysqli_query($con,$sql2);
				if($result && $result1)
				{
					?> <div style= "width:50px;height:42px;border:0;position: fixed;top: 20%; left: 3%;font-size: 18px;">
		<font color="white"><?php echo "Record inserted successfully";?></font></div><?php
				}
				else
				{
					?> <div style= "width:50px;height:42px;border:0;position: fixed;top: 20%; left: 3%;font-size: 18px;">
		<font color="white"><?php echo "Could not enter data as username already exists";?></font></div><?php
				}*/
			/*}
			else
			{
				?> <div style= "width:50px;height:42px;border:0;position: fixed;top: 20%; left: 3%;font-size: 18px;">
		<font color="white"><?php echo "Passwords not matching";?></font></div><?php
			}*/
	}
	
 ?>