<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Untitled Document</title>
<link href="css/style.css" rel="stylesheet"/>
<?php
 include("banner.php")
?>
</head>

<body>
<div id="header">
<h1>STUDENT SIGN UP PAGE</h1>
</div>
<ul>
  <li><a href="home.php">HOME</a></li>
   <li><a href="signup.php">BACK</a></li>
</ul>
<?php
 if(isset($_REQUEST["radios"]))
 {
 if($_REQUEST["radios"]=="student")
 header("Location: stu_signup.php");
 
 else if($_REQUEST["radios"]=="faculty")
  header("Location: fac_signup.php");
  
  else if($_REQUEST["radios"]=="parent")
  header("Location: par_signup.php");
  
   else if($_REQUEST["radios"]=="guest")
  header("Location: guest_signup.php");
 }
 
 else 
 echo "SELECT ONE USER....";
 
  
?>
</body>
</html>
