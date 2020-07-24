<!DOCTYPE html>
<html>
<head>
	<title>Insert Student details</title>
	<link rel="stylesheet" type="text/css" href="insertd.css">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
</head>
<body>
	<div class="Menu">
		<ul>
	 		<li><a class="active" href="login.php">< Login</a></li>
		</ul>
	</div>
	<div class = "loginbox" style="margin-top: 18%; margin-bottom: 1%">
		<img src="p2.png" class="avatar">
		<h1>Team Registration</h1>
		<br>
		<form action="#" method="POST">
			<h3 style="color: red;">Team Name</h3>
			<input type="text" name="TeamName" placeholder="Enter TeamName">
			<br><br>


			<div class="accordion" id="accordionExample">
  <div class="card" style="background: #000; color:#fff;">
    <div class="card-header" id="headingOne" style="background: #000; color:#fff;">
      <h2 class="mb-0" style="background: #000; color:#fff;">
        <button class="btn btn-link btn-block text-left" type="button" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne" style="background: #000; color:#fff; border: none; border-left-style: solid; border-color: yellow">
          <h5 style="color: red;">Team Lead</h5>
        </button>
      </h2>
    </div>

    <div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#accordionExample" style="background: #000; color:#fff;">
      <div class="card-body" style="background: #000; color:#fff; border-left-style: solid; border-color: red">
        <p>Student ID</p>
			<input type="number" name="Sid1" placeholder="Enter StudentID">
			<p>Name</p>
			<input type="text" name="FName1" placeholder="Enter Name">
			<p>Phone number</p>
			<input style="background: #000; color: #fff; border: none; border-bottom: 1px solid #fff;background: transparent; outline: none; height: 40px; color: #fff;	font-size: 16px;" type="tel" placeholder="Phone no" name="phoneNo"  pattern="[0-9]{10}" title="Enter your Phone no." required/>
      </div>
    </div>
  </div>
  <div class="card" style="background: #000; color:#fff;">
    <div class="card-header" id="headingTwo"  style="background: #000; color:#fff;">
      <h2 class="mb-0" style="background: #000; color:#fff;">
        <button class="btn btn-link btn-block text-left collapsed" type="button" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo" style="background: #000; color:#fff; border: none; border-left-style: solid; border-color: yellow">
          <h5 style="color: red;">Member 1</h5>
        </button>
      </h2>
    </div>
    <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionExample" style="background: #000; color:#fff;">
      <div class="card-body" style="background: #000; color:#fff; border-left-style: solid; border-color: red">
        <p>Student ID</p>
			<input type="number" name="Sid" placeholder="Enter StudentID">
			<p>Name</p>
			<input type="text" name="FName" placeholder="Enter Name">
      </div>
    </div>
  </div>
  <div class="card" style="background: #000; color:#fff;">
    <div class="card-header" id="headingThree"  style="background: #000; color:#fff;">
      <h2 class="mb-0" style="background: #000; color:#fff;">
        <button class="btn btn-link btn-block text-left collapsed" type="button" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree" style="background: #000; color:#fff; border: none; border-left-style: solid; border-color: yellow">
          <h5 style="color: red;">Member 2</h5>
        </button>
      </h2>
    </div>
    <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordionExample" style="background: #000; color:#fff;" style="background: #000; color:#fff; border-left-style: solid; border-color: red">
      <div class="card-body">
        <p>Student ID</p>
			<input type="number" name="Sid" placeholder="Enter StudentID">
			<p>Name</p>
			<input type="text" name="FName" placeholder="Enter Name">
      </div>
    </div>
  </div>
  <div class="card" style="background: #000; color:#fff;">
    <div class="card-header" id="headingFour"  style="background: #000; color:#fff;">
      <h2 class="mb-0" style="background: #000; color:#fff;">
        <button class="btn btn-link btn-block text-left collapsed" type="button" data-toggle="collapse" data-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour" style="background: #000; color:#fff; border: none; border-left-style: solid; border-color: yellow">
          <h5 style="color: red;">Member 3</h5>
        </button>
      </h2>
    </div>
    <div id="collapseFour" class="collapse" aria-labelledby="headingFour" data-parent="#accordionExample" style="background: #000; color:#fff;" style="background: #000; color:#fff; border-left-style: solid; border-color: red">
      <div class="card-body">
        <p>Student ID</p>
			<input type="number" name="Sid" placeholder="Enter StudentID">
			<p>Name</p>
			<input type="text" name="FName" placeholder="Enter Name">
      </div>
    </div>
  </div>
</div>

			<br><br>
			<p>Team Username</p>
			<input type="text" name="username" placeholder="Hogwarts123">
			<p>Enter Team password</p>
			<input type="password" name="password1" placeholder="Enter Password">
			<p>Re-enter Team password</p>
			<input type="password" name="password2" placeholder="Enter Password">
			<input type="Submit" name="submit" value="Register">
		</form>
	</div>
	<!--<div class = "logout">
	<a href="login.php">
  		<img src="p3.png" alt="Logout" style="width:50px;height:42px;border:0;position: fixed;top: 8px;right: 16px;font-size: 18px;">
	</a>-->
</div>

<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>

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


	if(isset($_POST['FName']) && isset($_POST['LName']) && isset($_POST['phoneNo']) && isset($_POST['gender']) && isset($_POST['email']) && isset($_POST['username']) && isset($_POST['password1']) && isset($_POST['password2']))
	{
		//entering
		$Fname=$_POST['FName'];
		$Lname=$_POST['LName'];
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
		$deptAlloted=$_POST['DepartmentAllotted'];
		$username=$_POST['username'];
		$password1=$_POST['password1'];
		$password2=$_POST['password2'];
		
		$sql = "select * from Hogwarts.login where uname='".$username."'";
		$result=mysqli_query($con,$sql);

		if (mysqli_num_rows($result)==1)
		{
			echo "Username Already exists.";
		}
		else
		{
		
			if($password2==$password1)
			{
				$sql = "INSERT INTO `login`(`uname`, `pass`, `SchoolID`) VALUES ('$username','$password1',0)";
				$result = mysqli_query($con,$sql);	

				$sql = "INSERT INTO `Student`(`fname`, `lname`, `phoneNo`, `gender`, `email`, `class`, `username`) VALUES ('$Fname','$Lname','$phoneNo','$gender','$email',$deptAlloted,'$username')";
				$result = mysqli_query($con,$sql);
				
				$sql="SELECT `id` FROM `Student` WHERE username = '$username'";
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
				}
				$sql="UPDATE login SET SchoolID=$Tid where uname = '$username'";
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
				}
			}
			else
			{
				?> <div style= "width:50px;height:42px;border:0;position: fixed;top: 20%; left: 3%;font-size: 18px;">
		<font color="white"><?php echo "Passwords not matching";?></font></div><?php
			}
		}
	}
	
 ?>