<?php
// Start the session
session_start();

?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<link href="css/style.css" rel="stylesheet"/>
<link href="css/submit.css" rel="stylesheet"/>
<title>Untitled Document</title>
<link href="css/main.css" rel="stylesheet"/>

<?php
 include("header.php")
?>
</head>

<body >
<ul>
  <li><a href="home.php">HOME</a></li>
  <li><a href="mail.php"> </a></li>
</ul>

<div id="nav">

</div>
<br><br>
<form class="elegant-aero" method="post" action="att_update_view.php">



<?php
$subnam = $_SESSION['subnam'];
$name=$_SESSION['userid'];
$sem=$_SESSION['sem'];
$val=$_SESSION['div'];
$con=mysqli_connect('localhost','root','','academics');
$qryselect="select * from subject where sem_no ='".$sem."' and division = '".$val."' and fac_id ='".$name."'" ;
$result=mysqli_query($con,$qryselect);
$row=mysqli_fetch_object($result);

$sub= $row->sub_id;

$con=mysqli_connect('localhost','root','','academics');
$qry1="select * from ".$sub."_att" ;
$qry2 = "SHOW FIELDS FROM ".$sub."_att" ;
$res1=mysqli_query($con,$qry1);
$res2=mysqli_query($con,$qry2);

  $repeat = 0;
 while($rw1=mysqli_fetch_array($res2))
 {
  
  $r[$repeat] = $rw1[0];
  $repeat++;
 }?>
 <div id = 'header'>
<h1> <?php echo $subnam; ?><h1>
</div>
 <br>
 <h4> Select Date  </h4><br>
 <select name="update_date" id="sem" >
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

 
 
 <button class="button" type="submit" value="go" name="go"/>GO</button>&nbsp;</form>
</form>
</body>
</html>
