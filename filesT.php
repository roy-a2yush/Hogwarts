<?php //connect to sql and get db connection
//get project name of the logged in team
session_start();
$pname=$_SESSION['username'];
$subdir;
error_reporting(0);
if($_GET['subdir']!=null){
  $subdir=$_GET['subdir'];
  $pname=$pname."/".$subdir;
}
?>
<html>
 <head>
 <title>View files </title>
 <link rel="stylesheet" type="text/css" href="insertd.css">
 <link rel="stylesheet" href="node_modules/font-awesome/css/font-awesome.min.css">
  <link rel="stylesheet" href="node_modules/bootstrap-social/bootstrap-social.css">
  <link rel="stylesheet" href="node_modules/bootstrap/dist/css/bootstrap.min.css">
  <link rel="stylesheet" href="css/community.css">
  <link rel="stylesheet" href="css/dashbord.css">
  <link rel="stylesheet" href="css/styles.css">
  <style>
  .loginbox{
  	width: 320px;
  	height: 420px;
  	background: #000;
  	color: #fff;
  	top: 50%;
  	left: 50%;
  	position: absolute;
  	transform: translate(-50%, -50%);
  	box-sizing: border-box;
  	opacity: 0.8;
  	padding: 70px 30px;

  }
  </style>
 </head>
 <body><br><br><br><br>
   <?php if(!file_exists($pname)){ ?>
 <h3 class="loginbox"> No files uploaded by team <br> <?php echo $_SESSION['username']; ?> </h3>
 <?php
}
else if(file_exists($pname)){ ?>
  <table class="table table-dark">
  <thead>
    <tr>
      <th align='center'>Filename</th>
    </tr>
  </thead>
<tbody>
<?php
$array=scandir($pname);
for($i=2;$i<count($array);$i++){
  $a=explode(".",$array[$i]);
  $n=$a[count($a)-1];
  if($n=="jpeg" || $n=="pdf"){
  $link=$pname."/".$array[$i];
 echo "<tr><td><a href=$link font-color='white'>$array[$i]</a></td></tr>";
}
  else if(count($a)==1 && file_exists($pname."/".$a[0]) && is_dir($pname."/".$a[0])){
    if($_GET['subdir']!=null){
      $subdir=$subdir."/".$a[0];
    }
    else{
      $subdir=$a[0];
    }
    $link="filesT.php?subdir=$subdir";
    echo "<tr><td><a href=$link font-color='white'>$array[$i]</a></td></tr>";
  }
  else{
    $link="dispcodeT.php?file=$pname/$array[$i]";
    echo "<tr><td><a href=$link font-color='white'>$array[$i]</a></td></tr>";
  }
}
} ?>
</tbody>
</table>
</body>
</html>
