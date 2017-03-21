<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<link href="css/style.css" rel="stylesheet"/>
<link href="css/submit.css" rel="stylesheet"/>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Untitled Document</title>
</head>

<body>
<?php
 $nam = $_REQUEST['nam'];
 
 
 $usnam = $_REQUEST['usnam'];
 $pass = $_REQUEST['pass'];
 $rpass = $_REQUEST['rpass'];
 $by = $_REQUEST['bday'];

 $email=$_REQUEST['email'];
 $hobby=$_REQUEST['hobby'];
 $gender=$_REQUEST['gender'];
 $mob=$_REQUEST['mob'];

 $im= $_FILES["f5"]["name"];
 $priv="G";
 $con=mysqli_connect('localhost','root','','mailbox');
 $q="insert into user_info value('".$usnam."','".$nam."','".$pass."',".$mob.",'".$email."','". $gender."','". $hobby."','". $by."','".$im."','".$priv."')";
 mysqli_query($con,$q);
 mkdir("image/$usnam");
 move_uploaded_file($_FILES["f5"]["tmp_name"], "image/$usnam/" . $_FILES["f5"]["name"]);
 
?>
<form class="elegant-aero" method="post" action="mail.php">
<div>
<h1>SIGN UP SUCCESS...CONGRATZZZZ....</h1>
<button class="button" type="submit" >LOGIN</button>
</div>
</form>
</body>
</html>
