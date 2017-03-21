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
<link href="css/style.css" rel="stylesheet"/>

<link href="css/main.css" rel="stylesheet"/>

<?php
 include("header.php")
?>
</head>

<body style="background-color:#A6FFFF>
<?php
 
 if(isset($_POST['update']))
 {
 $sub = $_SESSION['sub'];
$dat = $_SESSION['update_date'];
//for adding a column


$con=mysqli_connect('localhost','root','','academics');
$qry="select * from ".$sub ;
$res=mysqli_query($con,$qry);

while($rw=mysqli_fetch_array($res))
{?>
 
<?php 
 $nam = "ins".$rw[0];
 $reg = $rw[4];
 
 if(isset($_POST[$nam]))
 {
  $stat = 1;
  } 
  else
  {
  $stat = 0;
  }
 
  $qry2 = "UPDATE `academics`.`".$sub."` SET `".$dat."` = '".$stat."' WHERE `".$sub."`.`regno` = '".$reg."'";
  mysqli_query($con,$qry2);
  
 $qry3 = "SHOW FIELDS FROM ".$sub;
 $res3=mysqli_query($con,$qry3); 
 $repeat = 0;
 while($rw3=mysqli_fetch_array($res3))
 {
 $repeat++;
 }

 $total = 0;
 for ($i = 8; $i < $repeat; $i++)
   {
     $total = $total + $rw[$i];
   }
  
    $total = $total + $stat;
	
	$repeat = $repeat - 8;
    $percent = ($total/$repeat)*100;
   $con=mysqli_connect('localhost','root','','academics');
   $qry4 = "UPDATE `academics`.`".$sub."` SET `total` = '".$total."' WHERE `".$sub."`.`regno` =  '".$reg."'";
   $qry5 = "UPDATE `academics`.`".$sub."` SET `percent` = '".$percent."' WHERE `".$sub."`.`regno` =  '".$reg."'"; 
   mysqli_query($con,$qry4);
   mysqli_query($con,$qry5);
}
 header("Location: att_view.php");
}
  
  else if(isset($_POST['operations']))
  header("Location: att_view.php");
  
  

  else if(isset($_POST['cancel']))
  header("Location: fachome.php");
  
?>

</body>
</html>
