
<?php 
	session_start();
	if($_SESSION['ID'] != null) {
		$TID = $_SESSION['ID'];
	}
	else {
		//header("Location: logout.php");
	}

	if($_SESSION['ID'] != null) {
		$ID = $_SESSION['ID'];
	}
	$host = "localhost";
	$user="root";
	$password="";
	$db="Hogwarts";
	$finalMarks = 0;
	$con=mysqli_connect("localhost","root","","Hogwarts");
	if($con === false)
	{
		echo "Connection failed to establish";
	}

	mysqli_select_db($con,$db);
	$Sid1="";
			$tid="";
			$teamid="";
			$teamname="";
			$fileaddress="";
			$pstatement="";
			$approval="";
			$completed="";
			$Sid2="";
			$Sid3="";
			$Sid4="";
	$sql="SELECT * FROM `team` WHERE teamid = $ID";
	$result = $con->query($sql);
	if ($result->num_rows > 0)
	{
		while($row = $result->fetch_assoc())
		{
			$Sid1=$row['Sid1'];
			$tid=$row['tid'];
			$teamid=$row['teamid'];
			$teamname=$row['teamname'];
			$fileaddress=$row['fileaddress'];
			$pstatement=$row['pstatement'];
			$approval=$row['approval'];
			$completed=$row['completed'];
			$Sid2=$row['Sid2'];
			$Sid3=$row['Sid3'];
			$Sid4=$row['Sid4'];
		}
    }

    $statusid="";
			$teamid="";
			$review1="";
			$review2="";
			$review3="";

    $sql1="SELECT * FROM `status` WHERE teamid = $ID";
	$result1 = $con->query($sql1);
	if ($result1->num_rows > 0)
	{
		while($row1 = $result1->fetch_assoc())
		{
			$statusid=$row1['statusid'];
			$teamid=$row1['teamid'];
			$review1=$row1['review1'];
			$review2=$row1['review2'];
			$review3=$row1['review3'];
		}
    }
 ?>


<!DOCTYPE html>
<html>
<head>
	<title>Check Status</title>
	<link rel="stylesheet" type="text/css" href="login.css">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<style type="text/css">
	
	.progress p{
		font-size: 30px;
		margin: auto;
		margin-bottom: 10px;
	}

	.progress ul {
		text-align: center;
	}

	.progress ul li {
		display: inline-block;
		width: 200px;
		position: relative;
	}

	.progress ul li .fa {
		background: #ccc;
		width: 16px;
		height: 16px;
		color: #fff;
		border-radius: 50%;
		padding: 5px;
	}

	.progress ul li .fa::after {
		content: '';
		background: #ccc;
		height: 5px;
		width: 205px;
		top: 55px;
		z-index: -1;
		display: block;
		position: absolute;
		left: 0;
	}



	<?php if($approval == 1) {?>
		.progress ul li:nth-child(1) .fa::after{
		background: #60aa97;
	}	
	.progress ul li:nth-child(1) .fa{
		background: #60aa97;
	}
	<?php } else { ?>
	.progress ul li:nth-child(1) .fa{
		background: #148e14;
	}

	.progress ul li:nth-child(1) .fa::after{
		background: #148e14;
	}
	<?php } ?>

	<?php if($approval == 1 && $review1 == '') {?>
		.progress ul li:nth-child(2) .fa::after{
		background: #148e14;
	}	
	.progress ul li:nth-child(2) .fa{
		background: #148e14;
	}
	<?php } else if($approval == 1 && $review1 != ''){ ?>
	.progress ul li:nth-child(2) .fa{
		background: #60aa97;
	}

	.progress ul li:nth-child(2) .fa::after{
		background: #60aa97;
	}
	<?php } ?>



	<?php if($review2 == '' && $review1 != '') {?>
		.progress ul li:nth-child(3) .fa::after{
		background: #148e14;
	}	
	.progress ul li:nth-child(3) .fa{
		background: #148e14;
	}
	<?php } else if($review2 != '' && $review1 != ''){ ?>
	.progress ul li:nth-child(3) .fa{
		background: #60aa97;
	}

	.progress ul li:nth-child(3) .fa::after{
		background: #60aa97;
	}
	<?php } ?>	

		

	<?php if($review3 == '' && $review2 != '') {?>
		.progress ul li:nth-child(3) .fa::after{
		background: #148e14;
	}	
	.progress ul li:nth-child(3) .fa{
		background: #148e14;
	}
	<?php } else if($review3 != '' && $review2 != ''){ ?>
	.progress ul li:nth-child(3) .fa{
		background: #60aa97;
	}

	.progress ul li:nth-child(3) .fa::after{
		background: #60aa97;
	}
	<?php } ?>



	<?php if($review3 != '' && $completed == 1) {?>
		.progress ul li:nth-child(3) .fa::after{
		background: #148e14;
	}	
	.progress ul li:nth-child(3) .fa{
		background: #148e14;
	}
	<?php } else if($review3 != '' && $completed != 1){ ?>
	.progress ul li:nth-child(3) .fa{
		background: #60aa97;
	}

	.progress ul li:nth-child(3) .fa::after{
		background: #60aa97;
	}
	<?php } ?>

</style>
<body>
	<div class="Menu">
		<ul>
	 		<li><a class="active" href="studentAccount.php">Home</a></li>
	  		<li><a href="insert.php" active>Status</a></li>
	  		<li><a href="update.php">Upload</a></li>
	  		<li><a href="delete.php">Change Password</a></li>
		</ul>
	</div>

	<div class="loginbox" style="width: 1200px">
	<img src="p2.png" class="avatar">
		<p style="padding-left: 210px; font-weight: bold; font-size: 7;"><h1>View Status</h1></p>
		<br><br>
		<div class="progress">
		<ul>
			<li>
				<p>Alloted</p>
				<?php if($approval == 1) {?>
				<i class="fa fa-check"></i>
			<?php } else { ?>
				<i class="fa fa-refresh"></i>
			<?php } ?>
			</li>
			<li>
				<p>Review 1</p>
				<?php if($review1 == '' && $approval == 1) {?>
				<i class="fa fa-refresh"></i>

			<?php } else if($review1 == ''){ ?>
				<i class="fa fa-times"></i>
			<?php } else {?>
				<i class="fa fa-check"></i>
				<p style="color: white;"><?php echo "$review1 / 25"; ?></p>
			<?php } ?>
			</li>
			<li>
				<p>Review 2</p>
				<?php if($review1 == '' && $review2 == '') {?>
				<i class="fa fa-times"></i>
			<?php } else if($review2 == ''){ ?>
				<i class="fa fa-refresh"></i>
			<?php } else {?>
				<i class="fa fa-check"></i>
				<p style="color: white;"><?php echo "$review1 / 25"; ?></p>
			<?php } ?>
			</li>
			<li>
				<p>Review 3</p>
				<?php if($review2 == '' && $review3 == '') {?>
				<i class="fa fa-times"></i>
			<?php } else if($review3 == ''){ ?>
				<i class="fa fa-refresh"></i>
			<?php } else {?>
				<i class="fa fa-check"></i>
				<p style="color: white;"><?php echo "$review1 / 25"; ?></p>
			<?php } ?>
			</li>
			<li>
				<p>Completed</p>
				<?php if($completed == 1) {?>
				<i class="fa fa-check"></i>
				<p><?php echo "25/25"; ?></p>
				<?php $finalMarks = 25; ?>
			<?php } else if($review3 == '') { ?>
				<i class="fa fa-times"></i>
			<?php } else {?>
				<i class="fa fa-refresh"></i>
			<?php } ?>
			</li>
		</ul>
		</div>
		<?php 
			$total = $review1 + $review2 + $review3 + $finalMarks;
			$sqlMarksCheck = "Select * from marks where teamid = $ID";
			$resultMarksCheck = $con->query($sqlMarksCheck);
			if ($resultMarksCheck->num_rows > 0) {
				$sqlMarks = "UPDATE `marks` SET `marks`=$total WHERE teamid = $ID";
				$resultMarks = $con->query($sqlMarks);
			}
			else {
				$sqlMarks = "INSERT INTO `marks`(`teamid`, `marks`) VALUES ($ID,$total)";
				$resultMarks = $con->query($sqlMarks);
			}
		 ?>
		 <br><br>
		 <h2 style="color:white; text-align: center;">Marks: <?php echo $total; ?></h2>
		 <?php if($review1 == '' || $review2 == '' || $review3 == '' || $completed != 1) {?>
		 <br><br><br>
		<a href="teacherReview.php"><input type="submit" name="Marks" value="Edit/Review" ></a>
	<?php } ?>
		<a href="teacherFileView.php"><input type="submit" name="Marks" value="View Files" ></a>
	</div>
	<a href="logout.php">
  		<img src="p3.png" alt="Logout" style="width:50px;height:42px;border:0;position: fixed;top: 8px;right: 16px;font-size: 18px;">
	</a>
</body>
</html>

