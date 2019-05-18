<html>
<?php
session_start();
error_reporting(0);
include("connection.php");
$email=$_SESSION['profile'];
$username=$_SESSION['userid'];
if($username==true && $_GET['em']==true )
{
}
else {
  header('location:index.php');
}
$query="SELECT * FROM deep_info WHERE email='$username'";
$data=mysqli_query($con,$query);
$result=mysqli_fetch_assoc($data);

?>
<head>
  <title>profile</title>
<style type = "text/css">
body{
  border: 0;
  margin: 0;
  padding: 0;
  background-image: url('backg3.jpeg');
  background-size: cover;
}
h1
{
  margin-top: 0;
}
.toper img
{
height:30px;
width:30px;
border-radius: 50%;
text-align: right;
}
.toper
{
  height:6%;
  width: 100%;
  border: 0;
  margin: 0;
  padding: 0;
  background: #3ADF00;
  box-shadow: 2px 2px 5px grey;
  z-index: 10;
  position: relative;
}
.title{
  height:20px;
  width:auto;
  position: relative;
}
.photu
{
  top:0;
  right:0;
  border:0;
  border-radius:5px;
  font-size:25;
  position: absolute;

}
.photu img{
  vertical-align: text-bottom;
}
.photu a:hover
{
  background: rgba(153, 28, 0, 1);
}
 a:link ,a:visited
{
  background-color: #f44336;
  color: white;
  padding: 6px 10px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
}
.left
{
  height:auto;
  width:30%;
  left:0px;
  top:0px;
  position:relative;
  background-color: white;
  margin: 0 auto;
  padding: 0;
  border-color: black;
  border-style: solid;
  font-size: 20px;
  font-family:inherit;
}
.left img
{
  width:100px;
  height:120px;
}
.left input[type="submit"]
{
  bottom:0px;
  height:30px;
  width:60px;
  background-color: #f44336;
  border-style: none;
  color: white;
  margin-right: 5px;
}
</style>
</head>
<body >
<div class="toper">
  <div class="title">
    <?php
     echo '<center><h1>Website title</h1></center>'
     ?>
  </div>
  <div class="photu">
    <?php
    echo '<img src="photos/'.$username.'.jpg'.'"> '.$result['first_name'].' <a href="logout.php">Logout</a></center>' ;
    ?>
  </div>
</div>
<br><br>
  <div class="left">
    <?php
    $temail=$_GET['em'];
    $ttemail="";
    $file_name='photos/'.$temail.'.jpg';
    
    if(is_file($file_name))
    {
      $ttemail=$temail;
    }
    else {
      $ttemail='default';
    }

    $q2="SELECT * FROM payment WHERE userid='$username'";
    $d2=mysqli_query($con,$q2);
    $result2=mysqli_fetch_assoc($d2);
    if($result2['stat']=="YES")
    {
      $_SESSION['profile']=="NO";
    }
    else {
      header('location:home.php');
    }
    
    $query1="SELECT * FROM deep_info WHERE email='$temail'";
    $data1=mysqli_query($con,$query1);
    $result1=mysqli_fetch_assoc($data1);
    $origDate=$result1['b_date'];
    $newDate = date("d-m-Y", strtotime($origDate));
    echo '<center><br><img src="photos/' . $ttemail. '.jpg"></center><br> &nbsp&nbsp&nbsp&nbsp&nbspName: '. $result1['first_name'] .' '. $result1['last_name'].'<br><br>&nbsp&nbsp&nbsp&nbsp
    Phone: ' . $result1['phone'] . '<br><br> &nbsp&nbsp&nbsp&nbsp&nbspEmail: ' . $result1['email'] . '<br><br> &nbsp&nbsp&nbsp&nbsp&nbspAddress: ' . $result1['city'] . ' , ' . $result1['state']
    .  '<br><br>&nbsp&nbsp&nbsp&nbsp&nbspBirth Date: ' . $newDate . '<br><br> &nbsp&nbsp&nbsp&nbsp&nbspJob/Bussiness: ' . $result1['job_bussiness'] . '<br><br> &nbsp&nbsp&nbsp&nbsp&nbspEducation: ' . $result1['education'] .'<br><br> &nbsp&nbsp&nbsp&nbsp&nbspHeight: ' . $result1['height'].'&nbsp&nbsp&nbsp&nbsp&nbspColour: ' .$result1['color'] .'<br><br>&nbsp&nbsp&nbsp&nbsp&nbspIncome: ' . $result1['income'] .'<br><br><center><input type="submit" id="submit" value="Print" onCLick="print()"</center><br><br>';
    ?>
  </div>
</body>
<script>
function print()
{
    window.location.href = 'print.php';
}
</script>
</html>
