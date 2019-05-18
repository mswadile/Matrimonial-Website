<?php
session_start();
error_reporting(0);
include("connection.php");
$email=$_SESSION['profile'];
$username=$_SESSION['userid'];
if($username==true)
{
}
else {
  header('location:index.php');
}
$query="SELECT * FROM DEEP_INFO WHERE email='$username'";
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
  width:60%;
  left:0px;
  top:0px;
  position:relative;
  background-color: white;
  margin: 0 auto;
  padding: 0;
  border-color: black;
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
<body onload="print()">
  <center><h1>indianbhoi.in</h1></center>
  <div class="left">
    <?php
    $query1="SELECT * FROM DEEP_INFO WHERE email='$email'";
    $data1=mysqli_query($con,$query1);
    $result1=mysqli_fetch_assoc($data1);
    $origDate=$result1['b_date'];
    $newDate = date("d-m-Y", strtotime($origDate));
    echo '<br> &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp<img src="photos/' . $email. '.jpg"><br><br> &nbsp&nbsp&nbsp&nbsp&nbspName: '. $result1['first_name'] .' '. $result1['last_name'].'<br><br>&nbsp&nbsp&nbsp&nbsp
    Phone: ' . $result1['phone'] . '<br><br> &nbsp&nbsp&nbsp&nbsp&nbspEmail: ' . $result1['email'] . '<br><br> &nbsp&nbsp&nbsp&nbsp&nbspAddress: ' . $result1['city'] . ' , ' . $result1['state']
    .  '<br><br>&nbsp&nbsp&nbsp&nbsp&nbspBirth Date: ' . $newDate . '<br><br> &nbsp&nbsp&nbsp&nbsp&nbspJob/Bussiness: ' . $result1['job_bussiness'] . '<br><br> &nbsp&nbsp&nbsp&nbsp&nbspEducation: ' . $result1['education'] .'<br><br> &nbsp&nbsp&nbsp&nbsp&nbspHeight: ' . $result1['height'].'&nbsp&nbsp&nbsp&nbsp&nbspColour: ' .$result1['color'] .'<br><br>&nbsp&nbsp&nbsp&nbsp&nbspIncome: ' . $result1['income'].'<br><br>';
    ?>
  </div>
</body>
<script>
function print()
{
    var mywindow = window.open('', 'PRINT', 'height=400,width=600');

    mywindow.document.write('<?php echo '<center><br><img src="photos/' . $email. '.jpg"></center><br> &nbsp&nbsp&nbsp&nbsp&nbspName: '. $result1['first_name'] .' '. $result1['last_name'].'<br><br>&nbsp&nbsp&nbsp&nbsp
   Phone: ' . $result1['phone'] . '<br><br> &nbsp&nbsp&nbsp&nbsp&nbspEmail: ' . $result1['email'] . '<br><br> &nbsp&nbsp&nbsp&nbsp&nbspAddress: ' . $result1['city'] . ' , ' . $result1['state']
    .  '<br><br>&nbsp&nbsp&nbsp&nbsp&nbspBirth Date: ' . $newDate . '<br><br> &nbsp&nbsp&nbsp&nbsp&nbspJob/Bussiness: ' . $result1['job_bussiness'] . '<br><br> &nbsp&nbsp&nbsp&nbsp&nbspEducation: ' . $result1['education'] .'<br><br> &nbsp&nbsp&nbsp&nbsp&nbspHeight: ' . $result1['height'].'&nbsp&nbsp&nbsp&nbsp&nbspColour: ' .$result1['color'] .'<br><br>&nbsp&nbsp&nbsp&nbsp&nbspIncome: ' . $result1['income'] . '<br><br>' ?>');
    mywindow.document.close();
    mywindow.focus();
    mywindow.print();
    mywindow.close();
}
</script>
</html>
