<?PHP

?>
<?php //connect to sql and get db connection
//get project name of the logged in team
session_start();
$pname=$_SESSION['username'];
$pname="test3";
$subdir;
error_reporting(0);
if($_GET['subdir']!=null){
  $subdir=$_GET['subdir'];
  $pname=$pname."/".$subdir;
}
?>
<html>
 <head>
 <title>Upload Folder using PHP </title>
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
 <form action="upfile.php" class="loginbox" method="post" enctype="multipart/form-data">
 <input type="hidden" name="foldername" value=<?php echo $pname; ?> /><br/><br/>
 Select Folder to Upload: <br><br><input type="file" name="files[]" id="files" multiple directory="" webkitdirectory="" moxdirectory="" /><br/><br/>
 <input type="Submit" value="Upload" name="upload" />
 </form>
</body>
</html>
