<?php
// Start the session
session_start();
$subnam = $_SESSION['sub_nam'];
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<script>
function myFunction() {
    window.print();
}
</script>
<head>

<link href="css/studhome.css" rel="stylesheet"/>
<link href="css/tablestyle.css" rel="stylesheet"/>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title><?php echo $subnam; ?></title>
</head>

<body>
<?php
$name=$_SESSION['userid'];
$sem=$_SESSION['sem'];
$div=$_SESSION['div'];



$con=mysqli_connect('localhost','root','','academics');
$qryselect="select * from subject where sem_no ='".$sem."' and division = '".$div."' and fac_id ='".$name."'";
$result=mysqli_query($con,$qryselect);
$row=mysqli_fetch_object($result);

$subname = $row->sub_name;
$_SESSION['subnam'] = $subname;
$sub= $row->sub_id;

$con=mysqli_connect('localhost','root','','academics');
$qry1="select * from ".$sub."_att order by slno" ;
$qry2 = "SHOW FIELDS FROM ".$sub."_att" ;
$res1=mysqli_query($con,$qry1);
$res2=mysqli_query($con,$qry2);
?><br><br>
<form class="elegant-aero">
<div id = 'header'>
<h1> <?php echo $subname; ?><h1>
</div>
 <left> <button class="button" onclick="myFunction()">PRINT</button> </left>
</form>
<form method="post" class="elegant-aero" action="att2_confirm.php">

<center>

 <br><br><center>
 &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<button class="button" type="submit" name="back">BACK</button>
 &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<button class="button" type="submit" name="update">UPDATE</button>
 &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<button class="button" type="submit" name="insert">INSERT</button>
 &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<button class="button" type="submit" name="delete">DELETE</button>
 &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<button class="button" type="submit" name="average">SUBJECT AVERAGE</button>
 &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<button class="button" type="submit" name="below">BELOW 75%</button>
*

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
