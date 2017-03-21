<?php
// Start the session
session_start();
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<link href="css/style.css" rel="stylesheet"/>
<link href="css/submit.css" rel="stylesheet"/>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Untitled Document</title>
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
$qryselect="select * from subject where `sem_no` ='".$sem."' and `division` = '".$div."' and `fac_id` ='".$name."'";
$result=mysqli_query($con,$qryselect);
$row=mysqli_fetch_object($result);

$sub= $row->sub_id;

$ssub = $sub."_int";
$_SESSION['sub'] = $ssub;

$con=mysqli_connect('localhost','root','','academics');
$qry1="select * from ".$sub."_int" ;
$qry2 = "SHOW FIELDS FROM ".$sub."_int" ;
$res1=mysqli_query($con,$qry1);
$res2=mysqli_query($con,$qry2);

  $repeat = 0;
 while($rw1=mysqli_fetch_array($res2))
 {
  
  $r[$repeat] = $rw1[0];
  $repeat++;
 }?>
 <br><br>
 <form method="post" class="elegant-aero" action="int_update_view.php">
 <center><br>
 &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<button class="button" type="submit" name="submit">SUBMIT</button>
 &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<button class="button" type="submit" name="operations">OPERATIONS</button>
 &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<button class="button" type="submit" name="cancel">CANCEL</button><br><br>
  <h4> Select One  </h4><br>
 <select name="insert_select"  >
   <option value=" ">-select-</option>
   <?php
 for ($i = 8; $i < $repeat; $i++)
   {
   
   ?>
   <option value="<?php echo $r[$i]; ?>"> <?php echo $r[$i]; ?></option>
   <?php
  }
  ?>
 </select>
 </center>
</form>
</body>
</html>
