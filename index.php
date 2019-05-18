<?php
session_start();
include("connection.php");
error_reporting(0);
$_SESSION['i5']=0;
?>


<html lang="en">
<head>
 <meta name="viewport" content="width=device-width, initial-scale=1">
 <title>Bhoi samaj</title>
 <style type="text/css">
 body{
  background-image: url('backg.jpeg');
  background-size: cover;
  border: 0;
  margin: 0;
  padding: 0 auto;
 }
 header{
   height:90px;
   width: 100%;
   background: #3ADF00;
   box-shadow: 2px 2px 5px grey;
   z-index: 10;
   position:relative;
   margin-top: 0;
   left:0;
 }
 input[type="submit"]{
  width: 200px;
  height: 35px;
  border:0px;
  -webkit-border-radius: 5px;
  -moz-border-radius: 5px;
  -ms-border-radius: 5px;
  -o-border-radius: 5px;
  border-radius: 5px;
  background-color: #CC0099;
  font-weight: bolder;
}
 .signup{
  width: 460px;
  height: 300px;
  background-color: rgba(0,0,0,0.5);
  margin: 0 auto;
  margin-top: 40px;
  padding-top: 10px;
  padding-left: 50px;
  -webkit-border-color: 15px;
  -moz-border-color: 15px;
  -ms-border-color: 15px;
  -o-border-color: 15px;
  border-color: 15px;
  color:white;
  font-weight: bolder;
  -webkit-box-shadow: inset -4px -4px rgba(0,0,0,0.5);
  box-shadow: inset -4px -4px rgba(0,0,0,0.5);
  font-size: 18px;
  position:relative;
 }
 input[type="text"]{
  width: 200px;
  height: 35px;
  border:0px;
  -webkit-border-radius: 5px;
  -moz-border-radius: 5px;
  -ms-border-radius: 5px;
  -o-border-radius: 5px;
  border-radius: 5px;
  padding-left: 5px;
 }
 input[type="password"]{
  width: 200px;
  height: 35px;
  border:0px;
  -webkit-border-radius: 5px;
  -moz-border-radius: 5px;
  -ms-border-radius: 5px;
  -o-border-radius: 5px;
  border-radius: 5px;
  padding-left: 5px;
 }
 .alert {
  padding: 20px;
  background-color: #f44336;
  color: white;
  opacity: 1;
  transition: opacity 0.6s;
  margin-bottom: 15px;
}
.alert_success {
  background-color: #4CAF50;
  padding: 20px;
  color: white;
  opacity: 1;
  transition: opacity 0.6s;
  margin-bottom: 15px;
}
.alert_info {
  padding: 20px;
  background-color: #2196F3;
  color: white;
  opacity: 1;
  transition: opacity 0.6s;
  margin-bottom: 15px;
}
.alert_warning {
  background-color: #ff9800;
  padding: 20px;
  color: white;
  opacity: 1;
  transition: opacity 0.6s;
  margin-bottom: 15px;
}
.closebtn {
  margin-left: 15px;
  color: white;
  font-weight: bold;
  float: right;
  font-size: 22px;
  line-height: 20px;
  cursor: pointer;
  transition: 0.3s;
}

.closebtn:hover {
  color: black;
}
.footer a{
  font-size: 30;
  color:#F44336;

}
.footer {
  position: fixed;
   left: 0;
   bottom: 10px;
   font-size: 25;
   color: black;
   width: 100%;
   text-align: center;
}
header b
{
  font-size: 20;
  font-family: sans-serif;
  line-height: -2px;
}
header em{
  font-size: 15px;
  line-height: -8px;

}
.footer marquee
{
    color:white;
}
 </style>

</head>
<body>
  <header>
    <br><center><b>All India Vadhu-Var</b><br><em>for<br>Kashyap , Kahar , Bhoi , Nishad & all similar </em></center>
  </header>
  <form action="" method="POST">
    <center><h1 style="color:White">Login <input type="text" name="logid" placeholder="Login id"> <input type="password" name="pass" placeholder="password"> <input type="submit" value="Okay"></h1></center>
</form >
 <div class="signup">
   <center><h2>Signup</h2></center>
  <form action="" method="GET">
   <input type="text" name="name" placeholder="Enter Your name">
   <input type="text" name="email" placeholder="Enter Your Email"><br><br>
   <input type="password" name="password" placeholder="Enter Your password"> <input type="password" name="repass" placeholder="Re-enter Your password"><br><br>
   <center><input type="submit" value="Submit"><br></center>
  </form>
</div>

<div class="footer">
    <marquee direction="right"><b>1 month free Access for all users! </b></marquee><br>
<b>&copy; Copyright 2018-2019<br><a href="about.php">About</b></a>
</div>
</body>
</html>


<?php
$name=$_GET['name'];
$email=$_GET['email'];
$password=$_GET['password'];
$repassword=$_GET['repass'];
if($name=="" && $email=="" && $password=="" && $repassword=="")
{

}
elseif ($name=="" || $email=="" || $password=="" || $repassword=="") {
  echo '<div class="alert_info"><span class="closebtn">&times;</span><strong>Warning!</strong> Enter all data!</div> ';
}
elseif($name!="" && $email!="" && $password!="" && $repassword!="")
{
if($password==$repassword)
{
$q1='SELECT user_name FROM user_info ORDER BY user_name';
$data1=mysqli_query($con, $q1);
$rows=mysqli_num_rows($data1);
$i=0;
$flag=3;
if($rows>0)
{

while ($row = mysqli_fetch_assoc($data1)) {
  if($row['user_name']==$email)
  {
    echo '<div class="alert_info"><span class="closebtn">&times;</span><strong>Warning!</strong> This Email is Already registered! (Please login!)</div> ';
    $flag=1;
    break;
  }
  else {
    $flag=0;
  }
   }
 }
 else {
   $query="INSERT INTO user_info VALUES('$email','$password','$email','$name')";
   mysqli_query($con,$query);
   $_SESSION['username']=$email;
   $_SESSION['search2']="no";
   header('location:info.php');
 }
 if($flag==0)
 {
   if (empty($email)) {
       echo '<div class="alert_warning"><span class="closebtn">&times;</span><strong>Warning!</strong> Email required</div> ';
     }
     else {
       if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
         echo '<div class="alert_warning"><span class="closebtn">&times;</span><strong>Warning!</strong> Email not valid</div> ';
       }
       else {
         $query="INSERT INTO user_info VALUES('$email','$password','$email','$name')";
         mysqli_query($con,$query);
         $_SESSION['username']=$email;
         header('location:info.php');
       }
     }
}
}
else {
  echo '<div class="alert_warning"><span class="closebtn">&times;</span><strong>Warning!</strong> Password does not match! (Make sure you are typing same password )</div> ';
}
}
?>

<?php
$userid=$_POST['logid'];
$pass=$_POST['pass'];
$errormsg="";
$query="SELECT * FROM user_info WHERE user_name='$userid' && password='$pass'";
$data=mysqli_query($con,$query);
$total=mysqli_num_rows($data);
if($userid=="" &&  $pass=="")
{
}
else {
if($total==1)
{
$_SESSION['userid']=$userid;
header('location:home.php');
}
else {
  $colorc="#f44336";
  echo ' <div class="alert"><span class="closebtn">&times;</span><strong>Error!</strong> Password or userid Incorrect (Make sure you are typing your Email as Login id)</div> ';
}
}
?>
<script>
var close = document.getElementsByClassName("closebtn");
var i;
for (i = 0; i < close.length; i++) {
 close[i].onclick = function(){
   var div = this.parentElement;
   div.style.opacity = "0";
   setTimeout(function(){ div.style.display = "none"; }, 600);
 }
}
</script>
