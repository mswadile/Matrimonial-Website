<?php
session_start();
error_reporting(0);
include("connection.php");
$username=$_SESSION['userid'];
if($username==true)
{
}
else {
  header('location:index.php');
}
if($_SESSION['profile']=="NO")
{
  $_SESSION['profile']=="OTHER";
  echo "<script> alert('please update your payment To accesss this section!  '); </script>";
}
$query="SELECT * FROM deep_info WHERE email='$username'";
$data=mysqli_query($con,$query);
$result=mysqli_fetch_assoc($data);

$qtest="SELECT email FROM deep_info ORDER BY email";
$data0=mysqli_query($con,$qtest);
$flag=3;

while ($row0 = mysqli_fetch_assoc($data0)) {
  if($row0['email']==$username)
  {
    $flag=1;
    break;
  }
  else {
    $flag=0;
  }
   }

if($flag==0)
{
    echo "<script>
           alert('You not filled your information properly ! click on edit profile to do that Ignore if you already filled');
           </script>";
}
?>
<html>
<head>
  <style type = "text/css">
  body{
    border: 0;
    margin: 0;
    padding: 0;
    background-image: url('backg1.jpeg');
    background-size: cover;
  }

  h1
  {
    margin-top: 0;
  }
  h3 {
  text-align: right;
  color:black;
}
h2{
  text-align:left;
}
.main
{
  top:6%;
  height:94%;
  width: 80%;
  position:absolute;
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
.side img
{
  radius:50%;
  height:30px;
  width:30px;
}
.side
{
  height:94%;
  background-color: #ea33cc;
  background: rgba(234, 51, 204, 0.5);
  position: fixed;
  margin-left: 80%;
  margine-top:6%;
  font-size: 25;
  color: white;
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
.photu a:link ,a:visited
{
  background-color: #f44336;
  color: white;
  padding: 6px 10px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
}

.side a:hover{
background: rgba(153, 28, 0, 1);
}
.side img{
  vertical-align: text-bottom;
}
.side input[type="button"]
{
  height:50px;
  width:100%;
  background: #3ADF00;
  border-style:solid;
  border-radius: 6px;
  color: white;
  border-color: black;
  font-size:25;
}
.side input[type="button"]:hover
{
  height:50px;
  width:100%;
  background: #00af0b;
  border-style:solid;
  border-radius: 6px;
  color: white;
  border-color: black;
  font-size:25;
}
.side input[type="submit"]
{
  height:30px;
  width:70%;
  background: #3ADF00;
  border-style:solid;
  border-radius: 6px;
  color: white;
  border-color: blue;
  font-size:20;
}
.side input[type="submit"]:hover
{
  background: #00af0b;
  border-style:solid;
  border-radius: 6px;
  color: white;
  border-color: blue;
  font-size:20;
}
.main img
{
  width:80px;
  height:100px;
  vertical-align:top;
  border-style:ridge;
  border-color: black;
  border-radius: 3px;
  float:left;
}
.mframe
{
  height:140px;
  width:70%;
  background: white;
  margin-left: 2%;
  font-size: 20;
  border-radius: 5px;
  display: inline-block;
}
.mframe:hover
{
  background: skyblue;
}
.minfo
{
  height:110px;
  width: 100%;
  margin: 1em;
}
.chat_box
{
  background: white;
  position: fixed;
  bottom:0px;
  right:10px;
  border-radius: 5px 5px 0px 0px;
}
.msg_box
{
  background: white;
  position: fixed;
  height:100px;
  width: 50px;
  bottom:0px;
  right:260px;
  border-radius: 5px 5px 0px 0px;
}
.chat_head
{
  background: #27ae60;
  padding:15px;
  color:white;
  font-size:25 ;
  border-radius: 5px 5px 0px 0px;
  font-family: sans-serif;
  cursor:pointer;
  padding-top: 0px;
  padding-bottom: 0px;
  width:200px;
}
.chat_head:hover
{
  background: #87D37C;
}
.chat_body
{
  height: 300px;
  padding:5px 0px;
}
.user_name
{
  padding:10px 20px;
  position: relative;
  color: black;
  font-family: fantasy;
}
.user_name:before
{
  content: "";
  height: 10px;
  width:10px;
  position:absolute;
  background: green;
  border-radius: 50%;
  left:5px;
  top:20px;
}
.mframe a
{
  bottom:0px;
  height:20px;
  width:50px;
  background-color: #f44336;
  border-style: none;
  color: white;
  float:right;
  margin-right: 5px;
  font-size: 18px;
  text-decoration: none;
  text-align: center;
}
.mframe a:hover
{
background: rgba(153, 28, 0, 1);
cursor:pointer;
pointer-events: none;
}
.mframe a:hover
{
  background: rgba(153, 28, 0, 1);
}
.side a
{
  text-decoration: none;
}
.modal {
  display: none;
  position: fixed;
  z-index: 1;
  padding-top: 100px;
  left: 0;
  top: 0;
  width: 100%;
  height: 100%;
  overflow: auto;
  background-color: rgb(0,0,0);
  background-color: rgba(0,0,0,0.4);
}
.modal-content {
  background-color:#4cd137;
  margin: auto;
  padding: 20px;
  border: 1px solid #888;
  width: 80%;
  top:0px;
}
.close {
  color: blue;
  float: right;
  font-size: 28px;
  font-weight: bold;
}
.close:hover,
.close:focus {
  color: #000;
  text-decoration: none;
  cursor: pointer;
}
.span
{
  top:0px;
  right:0px;
  position:relative;
}
.ad img
{
  height:50px;
  width:80%;
}

</style>
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
<script src="script.js"></script>
</head>
<body>
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
<div class="main">
    <?php
      $q1="SELECT * FROM deep_info ORDER BY first_name";
      $data2=mysqli_query($con, $q1);
      $rows=mysqli_num_rows($data2);


      $q111="SELECT * FROM payment WHERE userid='$username'";
      $data222=mysqli_query($con, $q111);
      $result111=mysqli_fetch_assoc($data222);
      $paystat=$result111['stat'];


      $gender=$result['gender'];
      $state=$result['state'];
      $ogender="";



      if($gender=="Male")
      {
      $ogender="Female";
      }
      else {
        $ogender="Male";
      }
      echo "<br>";
      if($_SESSION['search2']=="yes")
      {

      }
      else
      {
          if($rows>0)
          {
            while ($row = mysqli_fetch_assoc($data2))
            {
              if($row['gender'] == $ogender && $row['state']==$state)
              {
                  $ttmail="";
                  $rowtemp=$row['email'];
                  $path0='photos/'. $rowtemp.'.jpg';
                  if(!is_file($path0))
                    {
                        $ttmail='default';
                    }
                    else
                    {
                        $ttmail=$row['email'];
                    }
                echo '<form method="POST"><div class="mframe"><img src="photos/' . $ttmail . '.jpg">&nbsp&nbspName: ' . $row['first_name'] . ' ' . $row['last_name'] . ' &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbspHeight: ' .$row['height'] . '&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbspBirth Date: ' . $row['b_date'] . '<br><br>' ;
                echo "&nbsp&nbspJob/Bussiness: " . $row['job_bussiness'] . " &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbspEducation: " . $row['education'] . "&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbspCity: " . $row['city'] . "&nbsp&nbsp&nbsp&nbsp&nbsp<a href='profile.php?em=$row[email]'>View</a></div></form>";
              }

              if($c>4)
              {
                break;
              }
            }
       }
     }


     #-----------------------------------------------------------------------------------------------------------------

       $provff=[];
       $i=0;
       if (isset($_GET["search"])) {
         $_SESSION['search2']="yes";
         if($_SESSION['i5']==0)
         {
             $_SESSION['i5']=$_SESSION['i5']+1;
             echo "<script>document.location.reload(true);</script>";
         }
         
         if($paystat=="NO")
         {
           echo "<script>
           alert('To access this section please click on payment and pay fees');
           </script>";
         }
         else {
           $edu=$_GET['edu'];
           $col=$_GET['col'];
           $state=$_GET['state'];
           $q1f="SELECT * FROM deep_info ORDER BY first_name";
           $data2f=mysqli_query($con, $q1f);
           $rowsf=mysqli_num_rows($data2f);

     #---------------------------------------------------------------------------------------

           if($edu=="Any" && $col=="Any")
           {
             $i=0;
             while ($rowf = mysqli_fetch_assoc($data2f))
             {
               if($rowf['state']==$state && $rowf['gender'] == $ogender)
               {
               $i=$i+1;
               }
             }

             if($i==0)
             {
               echo "<script>
               alert('No record found');
               </script>";
             }
             else {
             $q1ff="SELECT * FROM deep_info ORDER BY first_name";
             $data2ff=mysqli_query($con, $q1ff);
             $rowsff=mysqli_num_rows($data2ff);

             while ($rowff = mysqli_fetch_assoc($data2ff))
             {
               if($rowff['state']==$state && $rowff['gender'] == $ogender)
               {
                  $ttmail="";
                  $rowtemp=$rowff['email'];
                  $path0='photos/'. $rowtemp.'.jpg';
                  if(!is_file($path0))
                    {
                        $ttmail='default';
                    }
                    else
                    {
                        $ttmail=$rowff['email'];
                    }
                 echo '<form method="POST"><div class="mframe"><img src="photos/' . $ttmail . '.jpg">&nbsp&nbspName: ' . $rowff['first_name'] . ' ' . $rowff['last_name'] . ' &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbspHeight: ' .$rowff['height'] . '&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbspBirth Date: ' . $rowff['b_date'] . '<br><br>' ;
                 echo "&nbsp&nbspJob/Bussiness: " . $rowff['job_bussiness'] . " &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbspEducation: " . $rowff['education'] . "&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbspCity: " . $rowff['city'] . "&nbsp&nbsp&nbsp&nbsp&nbsp<a href='profile.php?em=$rowff[email]'>View</a></div></form>";
               }
             }
           }
             header('Location: '.$_SERVER['REQUEST_URI']);
           }

     #----------------------------------------------------------------------------
           elseif($edu=="Any")
           {

             $i=0;
             while ($rowf = mysqli_fetch_assoc($data2f))
             {
               if($rowf['color']==$col && $rowf['state']==$state && $rowf['gender'] == $ogender)
               {
               $i=$i+1;
               }
             }

             if($i==0)
             {
               echo "<script>
               alert('No record found');
               </script>";
             }
             else {
               $q1ff="SELECT * FROM deep_info ORDER BY first_name";
               $data2ff=mysqli_query($con, $q1ff);
               $rowsff=mysqli_num_rows($data2ff);
               $c=0;

             while ($rowff = mysqli_fetch_assoc($data2ff))
             {
               if($rowff['color']==$col && $rowff['state']==$state && $rowff['gender'] == $ogender)
               {
                  $ttmail="";
                  $rowtemp=$rowff['email'];
                  $path0='photos/'. $rowtemp.'.jpg';
                  if(!is_file($path0))
                    {
                        $ttmail='default';
                    }
                    else
                    {
                        $ttmail=$rowff['email'];
                    }
                 echo '<form method="POST"><div class="mframe"><img src="photos/' . $ttmail . '.jpg">&nbsp&nbspName: ' . $rowff['first_name'] . ' ' . $rowff['last_name'] . ' &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbspHeight: ' .$rowff['height'] . '&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbspBirth Date: ' . $rowff['b_date'] . '<br><br>' ;
                 echo "&nbsp&nbspJob/Bussiness: " . $rowff['job_bussiness'] . " &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbspEducation: " . $rowff['education'] . "&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbspCity: " . $rowff['city'] . "&nbsp&nbsp&nbsp&nbsp&nbsp<a href='profile.php?em=$rowff[email]'>View</a></div></form>";
                 $provff[$c]=$rowff['email'];
                 $c=$c+1;
               }
             }
           }
             header('Location: '.$_SERVER['REQUEST_URI']);
           }

     #-----------------------------------------------------------------------------------------------
           elseif($col=="Any")
           {

             $i=0;
             while ($rowf = mysqli_fetch_assoc($data2f))
             {
               if($rowf['job_bussiness']==$edu && $rowf['state']==$state && $rowf['gender'] == $ogender)
               {
               $i=$i+1;
               }
             }
             if($i==0)
             {
               echo "<script>
               alert('No record found');
               </script>";
             }
             else {
               $q1ff="SELECT * FROM deep_info ORDER BY first_name";
               $data2ff=mysqli_query($con, $q1ff);
               $rowsff=mysqli_num_rows($data2ff);
               $c=0;


             while ($rowff = mysqli_fetch_assoc($data2ff))
             {
               if($rowff['job_bussiness']==$edu && $rowff['state']==$state && $rowff['gender'] == $ogender)
               {
                 $ttmail="";
                  $rowtemp=$rowff['email'];
                  $path0='photos/'. $rowtemp.'.jpg';
                  if(!is_file($path0))
                    {
                        $ttmail='default';
                    }
                    else
                    {
                        $ttmail=$rowff['email'];
                    }
                 echo '<form method="POST"><div class="mframe"><img src="photos/' . $ttmail . '.jpg">&nbsp&nbspName: ' . $rowff['first_name'] . ' ' . $rowff['last_name'] . ' &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbspHeight: ' .$rowff['height'] . '&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbspBirth Date: ' . $rowff['b_date'] . '<br><br>' ;
                 echo "&nbsp&nbspJob/Bussiness: " . $rowff['job_bussiness'] . " &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbspEducation: " . $rowff['education'] . "&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbspCity: " . $rowff['city'] . "&nbsp&nbsp&nbsp&nbsp&nbsp<a href='profile.php?em=$rowff[email]'>View</a></div></form>";
                 $provff[$c]=$rowff['email'];
                 $c=$c+1;
               }

             }
           }
             header('Location: '.$_SERVER['REQUEST_URI']);
           }

     #----------------------------------------------------------------------------
     else
     {

       $i=0;
       while ($rowf = mysqli_fetch_assoc($data2f))
       {
         if($rowf['job_bussiness']==$edu && $rowf['state']==$state && $rowf['color']==$col && $rowf['gender'] == $ogender)
         {
         $i=$i+1;
         }
       }

       if($i==0)
       {
         echo "<script>
         alert('No record found');
         </script>";
       }
       else {
         $q1ff="SELECT * FROM deep_info ORDER BY first_name";
         $data2ff=mysqli_query($con, $q1ff);
         $rowsff=mysqli_num_rows($data2ff);
         $c=0;

       while ($rowff = mysqli_fetch_assoc($data2ff))
       {
         if($rowff['job_bussiness']==$edu && $rowff['state']==$state && $rowff['color']==$col && $rowff['gender'] == $ogender)
         {
            $ttmail="";
            $rowtemp=$rowff['email'];
            $path0='photos/'. $rowtemp.'.jpg';
            if(!is_file($path0))
                {
                    $ttmail='default';
                }
            else
                {
                    $ttmail=$rowff['email'];
                }
           echo '<form method="POST"><div class="mframe"><img src="photos/' . $ttmail . '.jpg">&nbsp&nbspName: ' . $rowff['first_name'] . ' ' . $rowff['last_name'] . ' &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbspHeight: ' .$rowff['height'] . '&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbspBirth Date: ' . $rowff['b_date'] . '<br><br>' ;
           echo "&nbsp&nbspJob/Bussiness: " . $rowff['job_bussiness'] . " &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbspEducation: " . $rowff['education'] . "&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbspCity: " . $rowff['city'] . "&nbsp&nbsp&nbsp&nbsp&nbsp<a href='profile.php?em=$rowff[email]'>View</a></div></form>";
           $provff[$c]=$rowff['email'];
           $c=$c+1;
         }
       }
       }
       header('Location: '.$_SERVER['REQUEST_URI']);

     }


         }
       }

  ?>
</div>
  <div class="side">
    <b><center><input type=button value="Edit profile" id="myprofile" onClick="hmyprofile()"></center></b>
    <b><center><input type=button value="Payment" id="payment" onClick="pay()"></center></b><br>
    <form method="GET">
    <div class="modal-content">
       Education <select name="edu"><option value="Any">Any</option><option name="Engineer">Engineer</option><option name="Doctor">Doctor</option><option name="Teacher">Teacher</option><option name="Actor">Actor</option><option name="ca">C.A.</option><option name="Pharmacist">Pharmacist</option>
         <option name="Farmer">Farmer</option><option name="Judge">Judge</option><option name="Journalist">Journalist</option><option name="Scientist">Scientist</option><option name="Lawyer">Lawyer</option><option name="Politition">Politition</option><option name="Photographer">Photographer</option><option name="Other">Other</option></select>
         Colour <select name="col"><option value="Any">Any</option><option value="fair">Fair</option><option name="Medium">Medium</option><option name="Brown">Brown</option><option name="darkbrown">Drak Brown</option></select>
        State <select name="state"><option value="Andhra_Pradesh">Andhra Pradesh</option><option name="Arunachal Pradesh">Arunachal Pradesh</option><option name="Assam">Assam</option><option name="Bihar">Bihar</option><option name="Chhattisgarh">Chhattisgarh</option><option name="Goa">Goa</option><option name="Gujarat">Gujarat</option>
           <option name="Haryana">Haryana</option>
         <option name="Himachal Pradesh">Himachal Pradesh</option><option name="Jammu and Kashmir">Jammu and Kashmir</option><option name="Jharkhand">Jharkhand</option><option name="Karnataka">Karnataka</option><option name="Kerala">Kerala</option><option name="Madhya Pradesh">Madhya Pradesh</option>
         <option name="Maharashtra">Maharashtra</option><option name="Manipur">Manipur</option><option name="Meghalaya">Meghalaya</option><option name="Mizoram">Mizoram</option><option name="Nagaland">Nagaland</option><option name="Odisha">Odisha</option><option name="Punjab">Punjab</option>
         <option name="Rajasthan">Rajasthan</option><option name="Sikkim">Sikkim</option><option name="Tamil Nadu">Tamil Nadu</option><option name="Telangana">Telangana</option><option name="Tripura">Tripura</option><option name="Uttar Pradesh">Uttar Pradesh</option><option name="Uttarakhand">Uttarakhand</option><option name="West Bengal">West Bengal
         </option></select><br><br>
         <b><center><input type="submit" value="Search" name="search"></center></b>
        </form>



  </div>
<div class="ad">
    <br><center><a href="#" onClick="ad()"><img src="ad/2.jpeg"></a></center>
  </div>

  </div>
</body>
</html>
<script>
function hmyprofile()
{
  window.location.href = 'myprofile.php';
}
function pay()
{
  var stat='<?php echo $paystat;  ?>'
  if(stat=="NO")
  {
  window.location.href = 'payu/index.php';
  }
  else {
  alert('Your payment is Uptodate!');
  }
}
function ad()
{
    window.open('http://www.wadekarsolar.com');
}
</script>
