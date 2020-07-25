<?php
 function deleteDir($dirPath) {
    if (! is_dir($dirPath)) {
        return ;
    }
    if (substr($dirPath, strlen($dirPath) - 1, 1) != '/') {
        $dirPath .= '/';
    }
    $files = glob($dirPath . '*', GLOB_MARK);
    foreach ($files as $file) {
        if (is_dir($file)) {
            deleteDir($file);
        } else {
            unlink($file);
        }
    }
    rmdir($dirPath);
}

if(isset($_POST['upload']))
{
  if($_POST['foldername']!= "")
  {
    $foldername=$_POST['foldername'];
    deletedir($foldername);
    if(!is_dir($foldername)) mkdir($foldername);
    foreach($_FILES['files']['name'] as $i => $name)
  {
        if(strlen($_FILES['files']['name'][$i])>1)
        {
          move_uploaded_file($_FILES['files']['tmp_name'][$i],$foldername."/".$name);
        }
    }
    //echo "Folder is successfully uploaded";
  }
  else
      echo "Upload folder name is empty";
}
header("location: "."test.php");
?>
