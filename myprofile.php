<?php
include("connection.php");
session_start();
error_reporting(0);
$username=$_SESSION['userid'];
if($username==true)
{
}
else {
  header('location:index.php');
}

 ?>

 <?php
 $query1="SELECT * FROM deep_info WHERE email='$username'";
 $data=mysqli_query($con,$query1);
 $result=mysqli_fetch_assoc($data);
 ?>

<html>
<head>
<style type="text/css">
body{
  border: 0;
  margin: 0;
  padding: 0;
  background-image: url('backg2.jpeg');
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
h5{
  color:white;
  font-family:sans-serif;
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
input[type="text"]
{
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
input[type="file"]
{
  border:0px;
  -webkit-border-radius: 5px;
  -moz-border-radius: 5px;
  -ms-border-radius: 5px;
  -o-border-radius: 5px;
  border-radius: 5px;
  padding-left: 5px;
    background: #3ADF00
}
input[type="date"]
{
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
select
{
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

.form{
  width: 460px;
  height: 970px;
  background-color: rgba(0,0,0,0.5);
  border: 0;
  margin: 0 auto;
  padding: 0;
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
  box-shadow: none;
  font-size: 18px;
  position:relative;
}
  </style>
</head>
<body>
  <div class="toper">
    <div class="title">
      <?php
       echo '<center><h1>All India Vadhu-Var</h1></center>'
       ?>
    </div>
    <div class="photu">
      <?php
      echo '<img src="photos/'.$username.'.jpg'.'"> '.$result['first_name'].' <a href="logout.php">Logout</a></center>' ;
      ?>
    </div>
  </div>
  <div class="form">
<form class='infor' method='GET' >
  <h2>Personal Information</h2><br>
<input type=text name="first_name" placeholder="First name" value="<?php echo $result['first_name']; ?>">&nbsp&nbsp&nbsp<input type=text name="last_name" placeholder="Last name" value="<?php echo $result['last_name']; ?>"><br><br>
<input type=date name="date" max="2001-01-01" value="<?php echo $result['b_date']; ?>" > &nbsp&nbsp&nbsp&nbsp<select name="gender"><option selected="selected">
<?php echo $result['gender']; ?>
</option><option value="Male">Male</option><option name="Female">Female</option></select><br><br>
<input type=text name="height" placeholder="Height(inches)" value="<?php echo $result['height']; ?>">
<br><br><hr>
<h2>Contact Information</h2><br>

<input type=text name="phone" placeholder="Phone" value="<?php echo $result['phone']; ?>">&nbsp&nbsp&nbsp&nbsp<input type=text name="email" placeholder="Email" value="<?php echo $result['email']; ?>" ><br>
<br><br><hr>

<h2>Other</h2>


<select name="job"><option selected="selected">
<?php echo $result['job_bussiness']; ?>
</option><option name="Engineer">Engineer</option><option name="Doctor">Doctor</option><option name="Teacher">Teacher</option><option name="Actor">Actor</option><option name="ca">C.A.</option><option name="Pharmacist">Pharmacist</option>
  <option name="Farmer">Farmer</option><option name="Judge">Judge</option><option name="Journalist">Journalist</option><option name="Scientist">Scientist</option><option name="Lawyer">Lawyer</option><option name="Politition">Politition</option><option name="10th">S.S.C.</option><option name="12th">H.S.C.</option>
  <option name="Bussiness">Bussiness</option><option name="ITI">I.T.I.</option><option name="Other">Other</option></select>


  &nbsp&nbsp&nbsp&nbsp<input type=text name="education" placeholder="Education" value="<?php echo $result['education']; ?>"><br><br>
<input type=text name="income" placeholder="Income" value="<?php echo $result['income']; ?>">&nbsp&nbsp&nbsp&nbsp<input type=text name="city" placeholder="City" value="<?php echo $result['city']; ?>"><br><br>
<select name="state"><option selected="selected">
<?php echo $result['state']; ?></option><option value="Andhra_Pradesh">Andhra Pradesh</option><option name="Arunachal Pradesh">Arunachal Pradesh</option><option name="Assam">Assam</option><option name="Bihar">Bihar</option><option name="Chhattisgarh">Chhattisgarh</option><option name="Goa">Goa</option><option name="Gujarat">Gujarat</option>
  <option name="Haryana">Haryana</option>
<option name="Himachal Pradesh">Himachal Pradesh</option><option name="Jammu and Kashmir">Jammu and Kashmir</option><option name="Jharkhand">Jharkhand</option><option name="Karnataka">Karnataka</option><option name="Kerala">Kerala</option><option name="Madhya Pradesh">Madhya Pradesh</option>
<option name="Maharashtra">Maharashtra</option><option name="Manipur">Manipur</option><option name="Meghalaya">Meghalaya</option><option name="Mizoram">Mizoram</option><option name="Nagaland">Nagaland</option><option name="Odisha">Odisha</option><option name="Punjab">Punjab</option>
<option name="Rajasthan">Rajasthan</option><option name="Sikkim">Sikkim</option><option name="Tamil Nadu">Tamil Nadu</option><option name="Telangana">Telangana</option><option name="Tripura">Tripura</option><option name="Uttar Pradesh">Uttar Pradesh</option><option name="Uttarakhand">Uttarakhand</option><option name="West Bengal">West Bengal
</option></select>&nbsp&nbsp&nbsp&nbsp
<select name="color"><option selected="selected">
<?php echo $result['color']; ?></option><option value="fair">Fair</option><option name="Medium">Medium</option><option name="Brown">Brown</option><option name="darkbrown">Drak Brown</option></select><br><br>
<center><input type=submit value="Update"></center>
</form>

<form action="" method="POST" enctype="multipart/form-data">
<center><br> Upload your new photo<br><br><input type="file" name="uploadfile" value=""><br><br><input type="submit" name="submit" value="Upload"> <br><br>
Tip:- Upload Image under 2mb size to see better results </center>
</form>

</div>
</body>
</html>

<?php
$first_name=$_GET['first_name'];
$last_name=$_GET['last_name'];
$b_day=$_GET['date'];
$gender=$_GET['gender'];
$height=$_GET['height'];
$phone=$_GET['phone'];
$email=$_GET['email'];
$job=$_GET['job'];
$education=$_GET['education'];
$income=$_GET['income'];
$city=$_GET['city'];
$state=$_GET['state'];
$color=$_GET['color'];
$door=$_SESSION['username'];
$query3="'SELECT email FROM deep_info ORDER BY email'";
$data3=mysqli_query($con,$query3);
while ($row = mysqli_fetch_assoc($data3)) {
  if($row['email']==$username)
  {
    $flag=1;
    break;
  }
  else {
    $flag=0;
  }
   }
if($door==true)
{

}
else {
  header('location:logout.php');
}
if($first_name=="" && $last_name=="" && $b_day=="" && $gender=="" && $height=="" && $phone=="" && $job=="" && $education==""  && $city=="" && $state=="" && $color=="")
{

}
elseif($first_name=="" || $last_name=="" || $b_day=="" || $gender=="" || $height=="" || $phone=="" || $job=="" || $education=="" || $city=="" || $state=="" || $color=="")
{
  echo "<script>
  alert('Please fill all Data');
  </script>";
}
elseif($flag==1)
{
    $query4="INSERT INTO deep_info VALUES('$first_name','$last_name','$b_day','$gender','$height','$phone','$email','$job','$education','$income','$city','$state','$color')";
    mysqli_query($con,$query4);
    $q6="SELECT * FROM payment WHERE email='$username'";
    $tpaystat=mysqli_query($q6);
    if($tpaystat==0)
    {
    $tempvar="YES";
    $query5="INSERT INTO payment VALUES('$email','$tempvar')";
    mysqli_query($con,$query1);
    }
    echo "<script>window.location.href = 'home.php';</script>";
}
else
{
$query1 = "UPDATE deep_info SET first_name='$first_name', last_name='$last_name' ,b_date='$b_day', gender='$gender', height='$height', phone='$phone', job_bussiness='$job', education='$education'
,income='$income',city='$city',state='$state', color='$color' WHERE email='$username'";
mysqli_query($con,$query1);
echo "<script>window.location.href = 'home.php';</script>";
}
?>

<?php
$filename=$username;
$realfilename=$_FILES["uploadfile"]["name"];
$tempname=$_FILES["uploadfile"]["tmp_name"];
$folder="photos/".$filename.".jpg";
if($realfilename==true)
{
  move_uploaded_file($tempname,$folder);
  echo "<center><img src='" . $folder . "' height=100 width=100></center>";
}
?>
