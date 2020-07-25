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
 <script>
    function ajax_save() {
      var hr = new XMLHttpRequest();
      var url = "savefile.php";
      var path= document.getElementById("path").value;
      var code = document.getElementById("code").value;
      var vars = "code=" + encodeURIComponent(code)+"&path="+path;
      hr.open("POST", url, true);
      hr.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
      hr.onreadystatechange = function() {
        if (hr.readyState == 4 && hr.status == 200) {
          var return_data = hr.responseText;
          document.getElementById("divi").innerHTML = return_data;
        }
      }
      hr.send(vars); // Actually execute the request
      document.getElementById("divi").innerHTML = "Output: processing...";
    }
  </script>
 </head>
 <body style="background:#232f34">
   <nav class="navbar navbar-dark navbar-expand-sm fixed-top" style="background:#232f34">
    <div class="collapse navbar-collapse nav-pos" id="Navbar">
        <ul class="navbar-nav mr-auto">
          <!-- uncomment this on event start date -->
          <!--<li class="nav-item "><a class="nav-link" href="leaderboardQ.php">Leaderboard</a></li>-->
          <button class="btn btn-info btn-lg" align="right" onclick="store();ajax_save();"> Save</button>
        </ul>
      </div>
    </div>
  </nav>
  <input type="hidden" name="path" id="path" value="<?php echo $p; ?>" >
   <input type="hidden" name="link" id="link" value="<?php echo $t; ?>" >
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
   var formObj = document.getElementById('code');
   function store() {
          formObj.value = editor.session.getValue();
        }
   </script>
</body>
</html>
