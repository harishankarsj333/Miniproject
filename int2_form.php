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
 $sem = $_SESSION['sem'];
 $div = $_REQUEST['division'];
 $name = $_SESSION['userid'];
 $_SESSION['div'] = $div;
?>
<br><br>
<form class="elegant-aero"  method="post"  action="int2_confirm.php">

<h4> Semester </h4><br>
<select name="sem" id="sem" >
<option value="0"><?php echo $sem; ?></option>
</select>

  
<h4> Division </h4><br>
<select name="division" id="division">
<option value=" "><?php echo $div; ?></option>
</select><br><br>
 
 
<h4> Select Subject </h4><br>
<select name="subname" id="subname">

<?php
  $con=mysqli_connect('localhost','root','','academics');
  
  $qryselect="select sub_name from subject where sem_no ='".$sem."' and division = '".$div."' and fac_id ='".$name."'" ;
  $result=mysqli_query($con,$qryselect);
  while($row=mysqli_fetch_array($result))
  {
   ?>
   <option value="<?php print $row[0]; ?>">
   <?php
   
   print $row[0];
   ?>
   </option>
   <?php
  } 
 ?>

</select><br><br>
  

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
