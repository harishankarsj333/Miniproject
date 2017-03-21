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
<?php
 $select = $_REQUEST['sem'];
 $_SESSION["sem"] = $select;
?>
<br><br>
<form class="elegant-aero"  method="post"  action="int2_form.php">

<h4> Semester </h4><br>
<select name="sem" id="sem" >
  <option value="0"><?php echo $select; ?></option>
  
 </select>
<h4> Select Division </h4><br>
<select name="division" id="division">
  <option value=" ">-select-</option>
  <option value="A">A</option>
  <option value="B">B</option>
</select><br><br>
  
 <div id="display">
 

 </div>
<button class="button" type="submit" name="view">GO</button>&nbsp;&nbsp;&nbsp;&nbsp;


</form>
<?php
 $name=$_SESSION["userid"];
 //$_SESSION['jsvar'] = $_POST['sem'];
 
?>
<div id="footer">
Copyright © www.cssoe.ac.in
</div>

</body>
</html>
