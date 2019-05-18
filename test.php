<html>
<head>
<style type="text/css">
header{
  height:70px;
  width: 100%;
  background: #3ADF00;
  box-shadow: 2px 2px 5px grey;
  z-index: 10;
  position: relative;
}
body{
 background-size: cover;
 border: 0;
 margin: 0;
 padding: 0;
}
img{
  border-radius:50%;
}
</style>
</head>


<body>
  <header>
    <br><center><h2>Website title</h2></center>
  </header>
  <br><br>

  <form action="" method="POST" enctype="multipart/form-data">
<center><input type="file" name="uploadfile" value=""><input type="submit" name="submit" value="Upload"> <br><br>
Tip:- Upload Image under 2mb size to see better results </center>
</form>

</body>


</html>


<?php
$filename=1;
$realfilename=$_FILES["uploadfile"]["name"];
$tempname=$_FILES["uploadfile"]["tmp_name"];
$folder="photos/".$filename.".jpg";
if($realfilename==true)
{
  move_uploaded_file($tempname,$folder);
  echo "<center><img src='" . $folder . "' height=100 width=100></center>";
}
?>
