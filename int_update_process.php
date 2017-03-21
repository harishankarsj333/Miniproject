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

<body style="background-color:#A6FFFF>

<?php
if(isset($_POST['submit']))
 {
$sub = $_SESSION['sub'];
$insert_select = $_SESSION['insert_select'];

//for adding a column


$con=mysqli_connect('localhost','root','','academics');
$qry="select * from ".$sub ;
$res=mysqli_query($con,$qry);

while($rw=mysqli_fetch_array($res))
{?>
 
 <form method="post" class="elegant-aero" action="int_reinsert_process.php"> 
 
<?php

 $nam = $_REQUEST["ins".$rw[0]];
 $_SESSION['temp'] = $nam;
 
 $adm = $rw[5];
 $qry2 = "UPDATE `academics`.`".$sub."` SET `".$insert_select."` = '".$nam."' WHERE `".$sub."`.`adm_no` = '".$adm."'";
 mysqli_query($con,$qry2);
 
  $as1 = ($rw[8]/20)*7.5;
  $as2 = ($rw[9]/20)*7.5;
  $int1 = ($rw[10]/50)*12.5;
  $int2 = ($rw[11]/50)*12.5;
  $att = ($rw[12]/10)*10;
  
  $total = $as1 + $as2 + $int1 + $int2 + $att;
  
  $percent = ($total*50)/100;
  $con=mysqli_connect('localhost','root','','academics');
  $qry4 = "UPDATE `academics`.`".$sub."` SET `total` = '".$total."' WHERE `".$sub."`.`adm_no` =  '".$adm."'";
  $qry5 = "UPDATE `academics`.`".$sub."` SET `percent` = '".$percent."' WHERE `".$sub."`.`adm_no` =  '".$adm."'"; 
  mysqli_query($con,$qry4);
  mysqli_query($con,$qry5);	
}?><br><br>
  <div id="header">
  <h1>
     UPDATE:
   <h1>
   </div>
   <div>
   &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<button class="button" type="submit" name="submit">CONFIRM</button>
 <?php }
 
  else if(isset($_POST['cancel']))
  header("Location: fachome.php");
  
  else if(isset($_POST['operations']))
  header("Location: int_view.php");

 
?>
 </div>
</form>
</body>
</html>
