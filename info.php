<?php
include("connection.php");
session_start();
error_reporting(0);
$useremail=$_SESSION['username'];
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
body{
 background-image: url('backg.jpeg');
 background-size: cover;
 border: 0;
 margin: 0;
 padding: 0;
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
header{
  height:70px;
  width: 100%;
  background: #3ADF00;
  box-shadow: 2px 2px 5px grey;
  z-index: 10;
  position: relative;
}
.form{
  width: 460px;
  height: 830px;
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
  <header>
    <br><center><h2>Website title</h2></center>
  </header>
  <div class="form">
<form class='infor' method='GET' enctype="multipart/form-data">
  <h2>Personal Information</h2><br>
<input type=text name="first_name" placeholder="First name">&nbsp&nbsp&nbsp<input type=text name="last_name" placeholder="Last name"><br><br>
<input type=date name="date" max="2001-01-01" > &nbsp&nbsp&nbsp&nbsp<select name="gender"><option value="" selected disabled hidden>Gender</option><option value="Male">Male</option><option name="Female">Female</option></select><br><br>
<input type=text name="height" placeholder="Height(feet)">
<br><br><hr>
<h2>Contact Information</h2><br>

<input type=text name="phone" placeholder="Phone">&nbsp&nbsp&nbsp&nbsp<input type=text name="email" placeholder="Email" value="<?php echo $useremail; ?>"><br>
<br><br><hr>

<h2>Other</h2>
<h5>Tip: Enter profession Eg:Doctor,Engineer to make you visible in search options</h5>


<select name="job"><option value="" selected disabled hidden>Profession</option><option name="Engineer">Engineer</option><option name="Doctor">Doctor</option><option name="Teacher">Teacher</option><option name="Actor">Actor</option><option name="ca">C.A.</option><option name="Pharmacist">Pharmacist</option>
  <option name="Farmer">Farmer</option><option name="Judge">Judge</option><option name="Journalist">Journalist</option><option name="Scientist">Scientist</option><option name="Lawyer">Lawyer</option><option name="Politition">Politition</option><option name="10th">S.S.C.</option><option name="12th">H.S.C.</option>
  <option name="Bussiness">Bussiness</option><option name="ITI">I.T.I.</option><option name="Photographer">Photographer</option><option name="Other">Other</option></select>


  &nbsp&nbsp&nbsp&nbsp<input type=text name="education" placeholder="Education"><br><br>
<input type=text name="income" placeholder="Income">&nbsp&nbsp&nbsp&nbsp<input type=text name="city" placeholder="City"><br><br>
<select name="state"><option value="" selected disabled hidden>State</option><option value="Andhra_Pradesh">Andhra Pradesh</option><option name="Arunachal Pradesh">Arunachal Pradesh</option><option name="Assam">Assam</option><option name="Bihar">Bihar</option><option name="Chhattisgarh">Chhattisgarh</option><option name="Goa">Goa</option><option name="Gujarat">Gujarat</option>
  <option name="Haryana">Haryana</option>
<option name="Himachal Pradesh">Himachal Pradesh</option><option name="Jammu and Kashmir">Jammu and Kashmir</option><option name="Jharkhand">Jharkhand</option><option name="Karnataka">Karnataka</option><option name="Kerala">Kerala</option><option name="Madhya Pradesh">Madhya Pradesh</option>
<option name="Maharashtra">Maharashtra</option><option name="Manipur">Manipur</option><option name="Meghalaya">Meghalaya</option><option name="Mizoram">Mizoram</option><option name="Nagaland">Nagaland</option><option name="Odisha">Odisha</option><option name="Punjab">Punjab</option>
<option name="Rajasthan">Rajasthan</option><option name="Sikkim">Sikkim</option><option name="Tamil Nadu">Tamil Nadu</option><option name="Telangana">Telangana</option><option name="Tripura">Tripura</option><option name="Uttar Pradesh">Uttar Pradesh</option><option name="Uttarakhand">Uttarakhand</option><option name="West Bengal">West Bengal
</option></select>&nbsp&nbsp&nbsp&nbsp
<select name="color"><option value="" selected disabled hidden>Colour</option><option value="fair">Fair</option><option name="Medium">Medium</option><option name="Brown">Brown</option><option name="darkbrown">Drak Brown</option></select><br><br>
<center><input type=submit value="Next"></center>
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
if($door==true)
{

}
else {
  header('location:logout.php');
}
if($first_name=="" && $last_name=="" && $b_day=="" && $gender=="" && $height=="" && $phone=="" && $email=="" && $job=="" && $education==""  && $city=="" && $state=="" && $color=="")
{

}
elseif($first_name=="" || $last_name=="" || $b_day=="" || $gender=="" || $height=="" || $phone=="" || $email=="" || $job=="" || $education=="" || $city=="" || $state=="" || $color=="")
{
  echo "<script>
  alert('Please fill all Data');
  </script>";
}
else {
if(DateTime::createFromFormat('Y-m-d',$_REQUEST['date'])!==FALSE)
{
$query="INSERT INTO deep_info VALUES('$first_name','$last_name','$b_day','$gender','$height','$phone','$email','$job','$education','$income','$city','$state','$color')";
mysqli_query($con,$query);
$tempvar="YES";
$query1="INSERT INTO payment VALUES('$email','$tempvar')";
mysqli_query($con,$query1);
$_SESSION['email']=$email;
ini_set( 'display_errors', 1 );
        error_reporting( E_ALL );
        $from = "support@indianbhoi.in";
        $to = $email;
        $subject = "Thank you for Registration";
        $message = "You have just registered to indianbhoi.in . \nIndians first site for Kashyap , Kahar , Bhoi , Nishad & all similar \nThank you for your Time";
        $headers = "From:" . $from;
        mail($to,$subject,$message, $headers);
echo "<script type='text/javascript'>window.location.href = 'photo_upload.php';</script>";
}
  else {
    echo "<script>
    alert('Please input date correctly');
    </script>";
  }
}
?>
