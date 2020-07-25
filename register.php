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
			<input type="text" name="teamName" placeholder="Enter TeamName" required>
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
			<input type="number" name="Sid1" placeholder="Enter StudentID" required>
			<p>Name</p>
			<input type="text" name="FName1" placeholder="Enter Name" required>
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
			<input type="number" name="Sid2" placeholder="Enter StudentID" required>
			<p>Name</p>
			<input type="text" name="FName2" placeholder="Enter Name" required>
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
			<input type="number" name="Sid3" placeholder="Enter StudentID">
			<p>Name</p>
			<input type="text" name="FName3" placeholder="Enter Name">
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
			<input type="number" name="Sid4" placeholder="Enter StudentID">
			<p>Name</p>
			<input type="text" name="FName4" placeholder="Enter Name">
      </div>
    </div>
  </div>
</div>
			<p>Enter Problem statement</p>
			<input type="text" name="problemStmt" placeholder="Enter Problem statement" required>
			
			<br><br>
			<p>Enter Team password</p>
			<input type="password" name="password1" placeholder="Enter Password">
			<p>Re-enter Team password</p>
			<input type="password" name="password2" placeholder="Enter Password">
			<input type="Submit" name="submit" value="Register" style="border: none; outline: none;	height: 40px; background: #fb2525; color: #fff;	font-size: 18px; border-radius: 20px;">
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


	if(isset($_POST['teamName']) && isset($_POST['FName1']) && isset($_POST['phoneNo']) && isset($_POST['Sid1']) && isset($_POST['FName2']) && isset($_POST['Sid2']) && isset($_POST['password1']) && isset($_POST['password2']) && isset($_POST['problemStmt']))
	{
		//entering
		$flag1=1;
		$flag2=1;
		$flag3=1;
		$flag4=1;
		$teamName=$_POST['teamName'];
		$Sid1=$_POST['Sid1'];
		$Fname1=$_POST['FName1'];
		$phoneNo=$_POST['phoneNo'];
		$sqlVerify1 = "Select * from Student where id = $Sid1";
		$result1 = mysqli_query($con,$sqlVerify1);
		$problemStmt = $_POST['problemStmt'];
		while($row1 = mysqli_fetch_array($result1)) {
			$dbName = $row1['name'];
			$dbPhone = $row1['phoneno'];
			if($dbName != $Fname1) { ?>
				<div style= "width:50px;height:42px;border:0;position: fixed;top: 20%; left: 3%;font-size: 18px;">
		<font color="white"><?php echo "Wrong Name1 $dbName $Fname1";?></font></div>
			<?php 
			$flag1 = 0;
			} else if($dbPhone != $phoneNo) { ?>
				<div style= "width:50px;height:42px;border:0;position: fixed;top: 20%; left: 3%;font-size: 18px;">
		<font color="white"><?php echo "Wrong phoneNo1";?></font></div>
			<?php 
			$flag1 = 0;
			} else {
				$flag1=1;
			}

		}
		if($flag1 == 1) {
		$Sid2=$_POST['Sid2'];
		$Fname2=$_POST['FName2'];
		$sqlVerify2 = "Select * from Student where id = $Sid2";
		$result2 = mysqli_query($con,$sqlVerify2);
		while($row2 = mysqli_fetch_array($result2)) {
			$dbName = $row2['name'];
			if($dbName != $Fname2) { ?>
				<div style= "width:50px;height:42px;border:0;position: fixed;top: 20%; left: 3%;font-size: 18px;">
		<font color="white"><?php echo "Wrong Name2";?></font></div>
			<?php 
			$flag2 = 0;
			} else {
				$flag2=1;
			}

		}
		if($flag2==1) {
		if(isset($_POST['Sid3']) && isset($POST['FName3'])) {
			$Sid3=$_POST['Sid3'];
			$Fname3=$_POST['FName3'];
			$sqlVerify3 = "Select * from Student where id = $Sid3";
			$result3 = mysqli_query($con,$sqlVerify3);
		while($row3 = mysqli_fetch_array($result3)) {
			$dbName = $row3['name'];
			if($dbName != $Fname3) { ?>
				<div style= "width:50px;height:42px;border:0;position: fixed;top: 20%; left: 3%;font-size: 18px;">
		<font color="white"><?php echo "Wrong Name3";?></font></div>
			<?php 
			$flag3 = 0;
			} else {
				$flag3=1;
			}

		}
		} else {
			$Sid3="";
			$Fname3="";
		}
		if($flag3==1) {
		if(isset($_POST['Sid4']) && isset($POST['FName4'])) {
			$Sid4=$_POST['Sid4'];
			$Fname4=$_POST['FName4'];
			$sqlVerify4 = "Select * from Student where id = $Sid4";
			$result4 = mysqli_query($con,$sqlVerify4);
		while($row4 = mysqli_fetch_array($result4)) {
			$dbName = $row4['name'];
			if($dbName != $Fname4) { ?>
				<div style= "width:50px;height:42px;border:0;position: fixed;top: 20%; left: 3%;font-size: 18px;">
		<font color="white"><?php echo "Wrong Name4";?></font></div>
			<?php 
			$flag4 = 0;
			} else {
				$flag4=1;
			}

		}
		} else {
			$Sid4="";
			$Fname4="";
		}
		if($flag4==1) {
		//$username=$_POST['username'];
		$password1=$_POST['password1'];
		$password2=$_POST['password2'];
		
		$sql = "select * from Hogwarts.login where uname='".$teamName."'";
		$result=mysqli_query($con,$sql);

		if (mysqli_num_rows($result)==1)
		{
			echo "Username Already exists.";
		}
		else
		{
		
			if($password2==$password1)
			{
				$sql = "INSERT INTO `login`(`uname`, `pass`, `Sid`) VALUES ('$teamName','$password1',0)";
				$result = mysqli_query($con,$sql);

				$sql = "INSERT INTO `team` (`Sid1`, `tid`, `teamid`, `teamname`, `fileaddress`, `pstatement`, `approval`, `completed`, `Sid2`, `Sid3`, `Sid4`) VALUES ('$Sid1', '5', NULL, '$teamName', '', '$problemStmt', '', '0', '$Sid2', '$Sid3', '$Sid4');";
				$result = mysqli_query($con,$sql);	

				$sql="SELECT `teamid` FROM `team` WHERE teamname = '$teamName'";
				$result = $con->query($sql);
				if ($result->num_rows > 0)
				{
					while($row = $result->fetch_assoc())
					{
						$Tid=$row['teamid'];
					}
				}
				else
				{
					echo "Could not insert the data some  fields may be improper";
				}
				$sql="UPDATE login SET Sid=$Tid where uname = '$teamName'";
				$result= mysqli_query($con,$sql);
				if($result)
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
	}}}}
	}
	
 ?>