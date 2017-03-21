<?php
// Start the session
session_start();
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<script>
function myFunction() {
    window.print();
}
</script>
<link href="css/style.css" rel="stylesheet"/>
<link href="css/tablestyle.css" rel="stylesheet"/>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>att_view</title>
<link href="css/main.css" rel="stylesheet"/>

<?php
 include("header.php")
?>
</head>

<body style="background-color:#A6FFFF>
<?php
$name=$_SESSION['userid'];
$sem=$_SESSION['sem'];
$div=$_SESSION['div'];
$subnam=$_SESSION['sub_nam'];


$con=mysqli_connect('localhost','root','','academics');
$qryselect="select * from subject where sem_no ='".$sem."' and division = '".$div."' and fac_id ='".$name."'";
$result=mysqli_query($con,$qryselect);
$row=mysqli_fetch_object($result);

$sub= $row->sub_id;

$con=mysqli_connect('localhost','root','','academics');
$qry1="select * from ".$sub."_int order by slno" ;
$qry2 = "SHOW FIELDS FROM ".$sub."_int" ;
$res1=mysqli_query($con,$qry1);
$res2=mysqli_query($con,$qry2);
?>
<br>
<form class="elegant-aero">
 <left> <button class="button" onclick="myFunction()">PRINT</button> </left>
</form>

<form method="post" class="elegant-aero" action="int2_confirm.php">
<center>
 <br><br><center>
 &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<button class="button" type="submit" name="back">BACK</button>
 &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<button class="button" type="submit" name="update">UPDATE</button>
 &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<button class="button" type="submit" name="insert">INSERT</button>

 <table width="364">
 <tr>
  <td width="134" height="10"> SLNO </td>
  <td width="600"> NAME  </td>
  <td width="300"> REG NO. </td>
  <td width="300"> TOTAL </td>
  <td width="300"> PERCENTAGE </td>
  
  <?php
  $repeat = 0;
 while($rw1=mysqli_fetch_array($res2))
 {?>
  
  <?php
  $r[$repeat] = $rw1[0];
  $repeat++;
  }
  ?>
  <?php
   for ($i = 8; $i < $repeat; $i++)
   {
  ?>
  <td width="134" height="10"> <?php echo $r[$i];  ?>  </td>
  <?php
   }
  ?>
  </tr>
 
<?php
while($rw=mysqli_fetch_array($res1))
{?>
 
 <tr>
  <td width="134" height="10"> <?php print $rw[0]; ?> </td>
  <td width="600"> <?php print $rw[1]; ?> </td>
  <td width="300"> <?php print $rw[4]; ?> </td>
  <td width="300"> <?php print $rw[6]; ?> </td>
  <td width="300"> <?php print $rw[7]; ?> </td>
   <?php for ($j = 8; $j < $repeat; $j++)
   {?>
  <td width="300"> <?php print $rw[$j]; ?> </td>
   <?php
   }
   ?>
 </tr>

 
<?php }
?>

</table>

 <br><br>
 </center>
</form>
</body>
</html>
