<?php
#error_reporting(0);
session_start();
$useremail=$_SESSION['email'];
if($useremail==true)
{
}
else {
  header('location:index.php');
}
 ?>
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
 background-image: url('backg2.jpeg');
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
$filename=$_SESSION['email'];
$realfilename=$_FILES["uploadfile"]["name"];
$tempname=$_FILES["uploadfile"]["tmp_name"];
$folder="photos/".$filename.".jpg";
if($realfilename==true)
{
  echo $folder;
  move_uploaded_file($tempname,$folder);
  $image = @imagecreatefromjpeg($folder);
  imagejpeg(resize_image_max($image,100,100), $folder);
 #header('location:logout.php');
}

function resize_image_max($image,$max_width,$max_height) {
	$w = imagesx($image); //current width
	$h = imagesy($image); //current height
	if ((!$w) || (!$h)) { $GLOBALS['errors'][] = 'Image couldn\'t be resized because it wasn\'t a valid image.'; return false; }

	if (($w <= $max_width) && ($h <= $max_height)) { return $image; }
	$ratio = $max_width / $w;
	$new_w = $max_width;
	$new_h = $h * $ratio;

	//if that didn't work
	if ($new_h > $max_height) {
		$ratio = $max_height / $h;
		$new_h = $max_height;
		$new_w = $w * $ratio;
	}

	$new_image = imagecreatetruecolor ($new_w, $new_h);
	imagecopyresampled($new_image,$image, 0, 0, 0, 0, $new_w, $new_h, $w, $h);
	return $new_image;
}
?>
