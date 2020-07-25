<?php //connect to sql and get db connection
//get project name of the logged in team
$p=$_GET['file'];
$x=explode(".",$p);
$t=$x[count($x)-1];
$l="";
if($t=="php" || $t=="css" || $t=="html"){
  $t=$t;
}
else if($t=="js"){
  $t="javascript";
}
else if($t=="c" ||$t=="cpp"){
  $t="c_cpp";
}
?>
<html>
 <head>
 <title>Upload Folder using PHP </title>
 <style type="text/css" media="screen">
     #editor {
         margin-top: 3%;
         position: absolute;
         top: 0;
         right: 0;
         bottom: 0;
         left: 0;
     }
 </style>
 </head>
 <body style="background:#232f34">
   <input type="hidden" name="code" id="code">
   <div id="editor">
     <?php
echo trim(htmlentities(file_get_contents( $p )));
 ?>
   </div>
   <script src="https://cdnjs.cloudflare.com/ajax/libs/ace/1.4.7/ace.js" type="text/javascript" charset="utf-8"></script>
   <script>
   var x= document.getElementById("link").value;
    var editor = ace.edit("editor");
    editor.setTheme("ace/theme/monokai");
    editor.session.setMode("ace/mode/"+x);
   editor.setShowPrintMargin(false);
   editor.setFontSize("16px");
   editor.setReadOnly(true);
   var formObj = document.getElementById('code');
   function store() {
          formObj.value = editor.session.getValue();
        }
   </script>
</body>
</html>
