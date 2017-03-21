<?php
// Start the session
session_start();
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>

<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Untitled Document</title>
<link href="css/style.css" rel="stylesheet"/>
<link href="css/submit.css" rel="stylesheet"/>
<link href="css/main.css" rel="stylesheet"/>

<?php
 include("header.php")
?>
</head>

<body>
<ul>
  <li><a href="home.php">HOME</a></li>
  <li><a href="mail.php"> MAIL BOX</a></li>
</ul>

<div id="nav">

</div>
<br><br>
<form class="elegant-aero"  method="post" name="myform" action="int2.php">

<h4> Select semester </h4><br>
<select name="sem" id="sem" >
  <option value=" ">-select-</option>
  <option value="s4">semester 4</option>
  <option value="s6">semester 6</option>
  <option value="s8">semester 8</option>
 </select>
 
 <button class="button" type="submit" value="go" name="go"/>GO</button>&nbsp;</form>
<?php
 $name=$_SESSION["userid"];
 //$_SESSION['jsvar'] = $_POST['sem'];

?>
<div id="footer">
Copyright © www.cssoe.ac.in
</div>

</body>
</html>
