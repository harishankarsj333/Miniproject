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
</head>

<body background="background="image/back.jpg"">
<?php
$delete_date = $_REQUEST['delete_date'];
$name=$_SESSION['userid'];
$sem=$_SESSION['sem'];
$val=$_SESSION['div'];
$con=mysqli_connect('localhost','root','','academics');
$qryselect="select * from subject where sem_no ='".$sem."' and division = '".$val."' and fac_id ='".$name."'" ;
$result=mysqli_query($con,$qryselect);
$row=mysqli_fetch_object($result);

$sub= $row->sub_id;
$ssub = $sub."_att";


//for adding a column


$con = mysqli_connect('localhost','root','','academics');
$qry="alter table `".$ssub."` drop `".$delete_date."`" ;
mysqli_query($con,$qry);


 header("Location: att_view.php");

?>
<?php
$con=mysqli_connect('localhost','root','','academics');
$qry="select * from ".$sub ;
$res=mysqli_query($con,$qry);

while($rw=mysqli_fetch_array($res))
{
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
	echo $repeat;
	$percent = ($total/$repeat)*100;
   $con=mysqli_connect('localhost','root','','academics');
   $qry4 = "UPDATE `academics`.`".$sub."` SET `total` = '".$total."' WHERE `".$sub."`.`regno` =  '".$reg."'";
   $qry5 = "UPDATE `academics`.`".$sub."` SET `percent` = '".$percent."' WHERE `".$sub."`.`regno` =  '".$reg."'"; 
   mysqli_query($con,$qry4);
   mysqli_query($con,$qry5);
}

?>

</body>
</html>
