<?php
// Start the session
session_start();
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<link href="css/nav_signup.css" rel="stylesheet"/>
<link href="css/studhome.css" rel="stylesheet"/>
<link href="css/tablestyle.css" rel="stylesheet"/>
<title>Untitled Document</title>
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
 <form method="post" class="elegant-aero" > 
 
<?php
 $nam = $_SESSION['temp'];
 $adm = $rw[5];
 
 $total = 0;
 for($i = 8; $i < 13; $i++)
 {
  $total = $total + $rw[$i];
 } 
 
  $percent = ($total*100)/50;
  $con=mysqli_connect('localhost','root','','academics');
  $qry4 = "UPDATE `academics`.`".$sub."` SET `total` = '".$total."' WHERE `".$sub."`.`adm_no` =  '".$adm."'";
  $qry5 = "UPDATE `academics`.`".$sub."` SET `percent` = '".$percent."' WHERE `".$sub."`.`adm_no` =  '".$adm."'"; 
  mysqli_query($con,$qry4);
  mysqli_query($con,$qry5);	
}
  header("Location: int_view.php");
 }
 
  else if(isset($_POST['cancel']))
  header("Location: fachome.php");
  
  else if(isset($_POST['operations']))
  header("Location: int_view.php");

 
?>

</body>
</html>
