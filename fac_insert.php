<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Untitled Document</title>
<link href="css/style.css" rel="stylesheet"/>
<link href="css/submit.css" rel="stylesheet"/>
<link href="css/main.css" rel="stylesheet"/>

</head>

<body style="background-color:#A6FFFF>
<?php
  $fnam = $_REQUEST['fnam'];
 $lnam = $_REQUEST['lnam'];
 
 $usnam = $_REQUEST['usnam'];
 
 $nam = $fnam." ".$lnam;
 $hob = " ";
 $birthy = " ";
 
 $pass = $_REQUEST['pass'];
 $rpass = $_REQUEST['rpass'];
 $fac_id = $_REQUEST['fac_id'];
 
 $doj = $_REQUEST['dd'];

 $addhom= $_REQUEST['addhom'];
 $gender= $_REQUEST['gender'];
 $age = $_REQUEST['age'];
 $add = $_REQUEST['add'];
 
 $qual=$_REQUEST['qual'];
 $desig=$_REQUEST['designation'];
 $f_mob=$_REQUEST['f_mob'];
 $qual=$_REQUEST['qual'];
 $email=$_REQUEST['email'];
 $im =  $_FILES['f3']['name'];
 $priv="F";
 
 $con=mysqli_connect('localhost','root','','mailbox');
 $q="insert into faculty value('".$fnam."','".$lnam."','".$usnam."','".$pass."','".$fac_id."','".$doj."','".$gender."',".$age.",'".$qual."','".$desig."',".$f_mob.",'".$email."','". $add."','".$addhom."','".$im."','".$priv."')";
 mysqli_query($con,$q);
 
 $q1 = "insert into user_info value('".$usnam."','".$nam."','".$pass."','".$f_mob."','".$email."','".$gender."','".$hob."','".$birthy."','".$im."','".$priv."')";
 mysqli_query($con,$q1);
 
 mkdir("image/$usnam");
 move_uploaded_file($_FILES["f3"]["tmp_name"], "image/$usnam/" . $_FILES["f3"]["name"]); 
 
?>
<br>
<br>
<br>
<form class="elegant-aero" method="post" action="login.php">
<div>
<h1>SIGN UP SUCCESS...CONGRATZZZZ....</h1>
<button class="button" type="submit" >LOGIN</button>
</div>
</form>
</body>
</html>
