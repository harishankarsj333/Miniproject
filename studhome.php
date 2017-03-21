<?php
// Start the session
session_start();
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Untitled Document</title>
<link href="css/style.css" rel="stylesheet" />
<link href="css/tablestyle.css" rel="stylesheet"/>
<link href="css/main.css" rel="stylesheet"/>

<?php
 include("header.php")
?>
</head>

<body >

<ul>
  <li><a href="home.php">HOME</a></li>
  <li><a href="about.php">ABOUT US</a></li>
  <li><a href="login.php">LOGIN</a></li>
  <li><a href="faculty.php"> FACULTIES</a></li>
  <li><a href="academics.php"> ACADEMICS</a></li>
  <li><a href="library.php"> LIBRARY</a></li>
  <li><a href="mail.php"> MAIL BOX</a></li>
  <li><a href="parents.php"> PARENTS</a></li>
  <li><a href="contact.php"> CONTACT</a></li>
</ul>

<?php
 $name=$_SESSION["userid"];
 $pass=$_SESSION["password"];
 $con=mysqli_connect('localhost','root','','mailbox');
 $qry="select * from student where usnam='".$name."' and pas='".$pass."'";
 $result=mysqli_query($con,$qry); 
 $row=mysqli_fetch_object($result);
 
 $fnam=$row->fnam;
 $lnam=$row->lnam;     
 $regno=$row->regno; 
 $admno=$row->admno;
 $roll_no=$row->roll_no;
 $dob=$row->dob;
 $adds=$row->adds;
 $join_year=$row->join_year;
 $smob=$row->smob;
 $par_nam=$row->par_nam;
 $blo_grp=$row->blo_grp;
 $email=$row->email;
 $priv="STUDENT"; 
 $file=$row->im;
	//echo $file;
	// remove all session variables
       // session_unset(); 

        // destroy the session 
       // session_destroy(); 
      
?>
<div id="nav">
<ul>
<li><a href="faculty.php">ATTENDANCE</a></li><br>
<li><a href="academics.php">INTERNALS</a></li><br>
<li><a href="fac_mail_home.php">MESSENGER</a></li>
</ul>
</div>

<form class="elegant-aero" method="post" action="stud_home_confirm.php">

<center>
<table width="584" height="641" border="1">
  <tr>
    <td height="161" colspan="2">&nbsp;<?php echo "<img alt='image not upload' src='image/$name/$file' height='150' width='200'/>";?>
      </td>
  </tr>
  <tr>
    <td height="46" colspan="2">&nbsp; <?php echo $fnam."    ".$lnam; ?></td>
  </tr>
  <tr>
    <td height="46">REGISTRATION NUMBER : </td>
    <td height="46">&nbsp; <?php echo $regno;?></td>
  </tr>
  
  
  <tr>
    <td>ADMISSION NUMBER : </td>
    <td height="40">&nbsp;<?php echo $admno;?></td>
  </tr>
  
  <tr>
    <td>ROLL NUMBER : </td>
    <td height="40">&nbsp;<?php echo $roll_no;?></td>
  </tr>
  <tr>
    <td>DATE OF BIRTH : </td>
    <td height="40">&nbsp;<?php echo $dob;?></td>
  </tr>
  <tr>
    <td>JOIN YEAR : </td>
    <td height="40">&nbsp;<?php echo $join_year;?></td>
  </tr>
  <tr>
    <td>ADDRESS : </td>
    <td height="40">&nbsp;<?php echo $adds;?></td>
  </tr>
  <tr>
    <td>E-MAIL ID : </td>
    <td height="40">&nbsp;<?php echo $email;?></td>
  </tr>
 
  <tr>
    <td>MOBILE NO : </td>
    <td height="40">&nbsp;<?php echo $smob;?></td>
  </tr>
  <tr>
    <td>PARENT NAME : </td>
    <td height="40">&nbsp;<?php echo $par_nam;?></td>
  </tr>
  <tr>
    <td width="285">PRIVILEGE </td>
    <td width="283" height="40">&nbsp;<?php echo $priv;?></td>
  </tr><br>
  <button class="button" type="submit" value="sgn" name="sgn"/>LOGOUT</button>&nbsp;
</table>
</center>
</form>
<br><br>



</body>S
</html>
