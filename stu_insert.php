<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<link href="style.css" rel="stylesheet"/>
<link href="submit.css" rel="stylesheet"/>
<link href="css/main.css" rel="stylesheet"/>

<?php
 include("header.php")
?>
</head>

<body style="background-color:#66CCFF">

<?php
 $fnam = $_REQUEST['fnam'];
 $lnam = $_REQUEST['lnam'];
 
 $usnam = $_REQUEST['uname'];
 $pass = $_REQUEST['pass'];
 $repas = $_REQUEST['repass'];
 
 $regno = $_REQUEST['regno'];
 $admno = $_REQUEST['admno'];
 $roll = $_REQUEST['roll_no'];
 
 
 $jy = $_REQUEST['jday'];
 
 $age = $_REQUEST['age'];
 $sex = $_REQUEST['gender'];
 
 $birthy = $_REQUEST['bday'];
 
 
 $adds = $_REQUEST['add'];
 $smob = $_REQUEST['mob_no'];
 $email = $_REQUEST['email'];
 
 $pnam = $_REQUEST['pnam'];
 $pmob = $_REQUEST['pmob'];
 
 $hob = " ";
 $nam = $fnam." ".$lnam;
 $im =  $_FILES['f1']['name'];
 $blood = $_REQUEST['blood'];
 $priv = "S";
 
 $con=mysqli_connect('localhost','root','','mailbox');
 $q="insert into student value('".$fnam."','".$lnam."','".$usnam."','".$pass."','".$email."',".$regno.",".$admno.",".$roll.",'".$birthy."',".$age.",'".$sex."','".$jy."','". $adds."',".$smob.",'".$pnam."',".$pmob.",'".$im."','".$blood."','".$priv."')";
  mysqli_query($con,$q);
  $q1 = "insert into user_info value('".$usnam."','".$nam."','".$pass."','".$smob."','".$email."','".$sex."','".$hob."','".$birthy."','".$im."','".$priv."')";
  mysqli_query($con,$q1);

 
 mkdir("image/$usnam");
 move_uploaded_file($_FILES["f1"]["tmp_name"], "image/$usnam/" . $_FILES["f1"]["name"]);

?>
<form class="elegant-aero" method="post" action="login.php">
<div>
<h1>SIGN UP SUCCESS...CONGRATZZZZ....</h1>
<button class="button" type="submit" >LOGIN</button>
</div>
</form>
</body>
</html>
