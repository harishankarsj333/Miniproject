<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<link href="style.css" rel="stylesheet"/>
<link href="submit.css" rel="stylesheet"/>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Untitled Document</title>
<link href="css/main.css" rel="stylesheet"/>

<?php
 include("header.php")
?>
</head>

<body style="background-color:#A6FFFF>
<?php
 $fnam = $_REQUEST['fnam'];
 $lnam = $_REQUEST['lnam'];
 
 $usnam = $_REQUEST['usnam'];
 $pass = $_REQUEST['pass'];
 $rpass = $_REQUEST['rpass'];
 $par_id = $_REQUEST['par_id'];
 
 $nam = $fnam." ".$lnam;
 
 $st_id = $_REQUEST['st_id'];
 $rel= $_REQUEST['rel'];

 $email=$_REQUEST['email'];
 $pmob=$_REQUEST['pmob'];
 $adds=$_REQUEST['adds'];
 $im= $_FILES["f2"]["name"];
 $sex = " ";
 $hob = " ";
 $birthy = " "; 
 $priv = "P";
 
 $con=mysqli_connect('localhost','root','','mailbox');
 $q="insert into parent value('".$fnam."','".$lnam."','".$usnam."','".$pass."','".$par_id."','".$st_id."','".$rel."',".$pmob.",'".$email."','". $adds."','".$im."','".$priv."')";
 mysqli_query($con,$q);
 $q1 = "insert into user_info value('".$usnam."','".$nam."','".$pass."','".$pmob."','".$email."','".$sex."','".$hob."','".$birthy."','".$im."','".$priv."')";
 mysqli_query($con,$q1);
 mkdir("image/$usnam");
 move_uploaded_file($_FILES["f2"]["tmp_name"], "image/$usnam/" . $_FILES["f2"]["name"]);
 
?>
<form class="elegant-aero" method="post" action="login.php">
<div>
<h1>SIGN UP SUCCESS...CONGRATZZZZ....</h1>
<button class="button" type="submit" >LOGIN</button>
</div>
</form>
</body>
</html>
