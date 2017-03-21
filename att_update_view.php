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
s
<body>
<?php
$subnam = $_SESSION['subnam'];
$update_date = $_REQUEST['update_date'];
$_SESSION['update_date'] = $update_date;

$name=$_SESSION['userid'];
$sem=$_SESSION['sem'];
$val=$_SESSION['div'];
$con=mysqli_connect('localhost','root','','academics');
$qryselect="select * from subject where sem_no ='".$sem."' and division = '".$val."' and fac_id ='".$name."'" ;
$result=mysqli_query($con,$qryselect);
$row=mysqli_fetch_object($result);

$sub= $row->sub_id;
$ssub = $sub."_att";
$_SESSION['sub'] = $ssub;

$con=mysqli_connect('localhost','root','','academics');

$qry1="select slno,name,`".$update_date."` from `".$ssub."` order by slno" ;
$res1=mysqli_query($con,$qry1);
?>

<form class="elegant-aero" method="post" action="att_update_process.php">
<div id = 'header'>
<h1> <?php echo $subnam; ?><h1>
</div>
<center><br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<button class="button" type="submit" name="update">UPDATE</button>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<button class="button" type="submit" name="cancel">CANCEL</button>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<button class="button" type="submit" name="operations">OPERAIONS</button>
<table width="525">
<tr>
  <td width="96" height="46"> <?php print "SLNO"; ?> </td>
  <td width="141" height="46"> <?php print "NAME"; ?> </td>
  <td width="211" height="46"> <?php print $update_date; ?> </td>
  <td width="601"> <?php print "CHANGE" ?></td>
 </tr> 
<?php
while($rw=mysqli_fetch_array($res1))
{
?>

 <tr>
  <td width="96" height="46"> <?php print $rw[0]; ?> </td>
  <td width="141" height="46"> <?php print $rw[1]; ?> </td>
  <td width="211" height="46"> <?php print $rw[2]; ?> </td>
  <td width="601"> <input type="checkbox" name="<?php echo "ins".$rw[0]; ?>" /></td>
 </tr> 
 <?php
  }
 ?>
 </table>
 </center>
 </form>
</body>
</html>
