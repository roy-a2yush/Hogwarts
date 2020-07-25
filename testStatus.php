
<?php 
	session_start();

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
	
 ?>


<!DOCTYPE html>
<html>
<head>
	<title>Check Status</title>
	<link rel="stylesheet" type="text/css" href="login.css">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<style type="text/css">
	
	#stepProgressBar  {
	display:  flex;
	justify-content:  space-between;
	align-items:  flex-end;
	width:  300px;
	margin:  0  auto;
	margin-bottom:  40px;
}

.step  {
text-align:  center;
}

.step-text  {
margin-bottom:  10px;
color:  #28a745;
}


.bullet {
	border: 1px solid #28a745;
	height: 20px;
	width: 20px;
	border-radius: 100%;
	color: #28a745;
	display: inline-block;
	position: relative;
	transition: background-color 500ms;
  line-height:20px;
}


.bullet.completed  {
	color:  white;
	background-color:  #28a745;
}



.bullet.completed::after {
	content: '';
	position: absolute;
	right: -60px;
	bottom: 10px;
	height: 1px;
	width: 54px;
	background-color: #28a745;
}

/* Base styles and helper stuff */
.hidden  {
	display:  none;
}
 
button  {
	padding:  5px  10px;
	border:  1px  solid  black;
	transition:  250ms background-color;
}

button:hover  {
	cursor:  pointer;
	background-color:  black;
	color:  white;
}

button:disabled:hover  {
	opacity:  0.6;
	cursor:  not-allowed;
}

.text-center  {
	text-align:  center;
}
  
.container  {
	max-width:  400px;
	margin:  0  auto;
	margin-top:  20px;
	padding:  40px;
}



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
		<p style="padding-left: 210px; font-weight: bold; font-size: 7;"><h1>Check Status</h1></p>
		<br><br>
		<div class="container">
	<a target="_blank" href="https://www.youtube.com/watch?v=WW6fEuheuas"><h1 class="text-center">Step Progress Bar (Video)</h1></a>
<div id="stepProgressBar">
	<div class="step">
		<p class="step-text">About</p>
		<div class="bullet">1</div>
	</div>
	<div class="step">
		<p class="step-text">Contact</p>
		<div class="bullet">2</div>
	</div>
	<div class="step">
		<p class="step-text">Step 3</p>
		<div class="bullet">3</div>
	</div>
	<div class="step">
		<p class="step-text">Step 4</p>
		<div class="bullet ">4</div>
	</div>
</div>
<div id="main">
	<p id="content"  class="text-center">Step Number 1</p>
	<button id="previousBtn" >Previous</button>
	<button id="nextBtn">Next</button>
	<button id="finishBtn" >Finish</button>


	<script type="text/javascript">
		const  previousBtn  =  document.getElementById('previousBtn');
const  nextBtn  =  document.getElementById('nextBtn');
const  finishBtn  =  document.getElementById('finishBtn');
const  content  =  document.getElementById('content');
const  bullets  =  [...document.querySelectorAll('.bullet')];

const MAX_STEPS = 4;
let currentStep = 1;

nextBtn.addEventListener('click',  ()  =>  {
	bullets[currentStep  -  1].classList.add('completed');
	currentStep  +=  1;
	previousBtn.disabled  =  false;
	if  (currentStep  ===  MAX_STEPS)  {
		nextBtn.disabled  =  true;
		finishBtn.disabled  =  false;
	}
	content.innerText  =  `Step Number ${currentStep}`;
});


previousBtn.addEventListener('click',  ()  =>  {
	bullets[currentStep  -  2].classList.remove('completed');
	currentStep  -=  1;
	nextBtn.disabled  =  false;
	finishBtn.disabled  =  true;
	if  (currentStep  ===  1)  {
		previousBtn.disabled  =  true;
	}
	content.innerText  =  `Step Number ${currentStep}`;
});

finishBtn.addEventListener('click',  ()  =>  {
	location.reload();
});
	</script>


</div>
</div>
	</div>
	<a href="logout.php">
  		<img src="p3.png" alt="Logout" style="width:50px;height:42px;border:0;position: fixed;top: 8px;right: 16px;font-size: 18px;">
	</a>
</body>
</html>

