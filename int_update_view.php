<?php
// Start the session
session_start();
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<link href="css/nav_signup.css" rel="stylesheet"/>
<link href="css/studhome.css" rel="stylesheet"/>
<link href="css/tablestyle.css" rel="stylesheet"/>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Untitled Document</title>
<link href="css/main.css" rel="stylesheet"/>

<?php
 include("header.php")
?>
</head>

<body style="background-color:#A6FFFF>
<?php
$insert = $_REQUEST['insert_select'];
$_SESSION['insert_select'] = $insert;

$name=$_SESSION['userid'];
$sem=$_SESSION['sem'];
$div=$_SESSION['div'];
$subnam=$_SESSION['sub_nam'];


$con=mysqli_connect('localhost','root','','academics');
$qryselect="select * from subject where `sem_no` ='".$sem."' and `division` = '".$div."' and `fac_id` ='".$name."'";
$result=mysqli_query($con,$qryselect);
$row=mysqli_fetch_object($result);

$sub= $row->sub_id;

$ssub = $sub."_int";
$_SESSION['sub'] = $ssub;

$con=mysqli_connect('localhost','root','','academics');
$qry="select slno,regno,name,".$insert." from ".$sub."_int order by slno" ;
$res=mysqli_query($con,$qry);?>
 <form method="post" class="elegant-aero" action="int_update_process.php">
 <center><br>
 &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<button class="button" type="submit" name="submit">UPDATE</button>
 &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<button class="button" type="submit" name="operations">OPERATIONS</button>
 &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<button class="button" type="submit" name="cancel">CANCEL</button>
<?php 
while($rw=mysqli_fetch_array($res))
{?>


 <table width="477">
 <tr>
  <td width="100" height="46"> <?php print $rw[0]; ?> </td>
  <td width="118" height="46"> <?php print $rw[1]; ?> </td>
  <td width="176" height="46"> <?php print $rw[2]; ?> </td>
  <td width="63"> <input type="text" name="<?php echo "ins".$rw[0]; ?>"/> <?php print $rw[3]; ?>  </td>
 </tr> 
 </table>
<?php }
?>
 
 </center>
</form>
</body>
</html>
