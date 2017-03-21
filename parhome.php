<?php
// Start the session
session_start();
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Untitled Document</title>
<link href="css/nav_signup.css" rel="stylesheet"/>
<link href="css/studhome.css" rel="stylesheet"/>
<link href="css/tablestyle.css" rel="stylesheet"/>
<link href="css/main.css" rel="stylesheet"/>

<?php
 include("header.php")
?>
</head>

<body style="background-color:#A6FFFF>
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
 $qry="select * from parent where usnam='".$name."' and pass='".$pass."'";
 $result=mysqli_query($con,$qry); 
 $row=mysqli_fetch_object($result);
 
 $fnam=$row->fnam;
 $lnam=$row->lnam;     
 $usnam=$row->usnam; 
 $par_id=$row->par_id;
 $st_id=$row->st_id;
 $rel=$row->rel;
 $pmob=$row->pmob;
 $email=$row->email;
 $adds=$row->adds;
 $priv="FACULTY"; 
 $file=$row->im;
// remove all session variables
        //session_unset(); 

        // destroy the session 
        //session_destroy();
?>
<form class="elegant-aero" action="stud_home_confirm.php" method="post">
<div id="nav">
<ul>
<li><a href="faculty.php">ATTENDANCE</a></li><br>
<li><a href="academics.php">INTERNALS</a></li><br>
<li><a href="fac_mail_home.php">MESSENGER</a></li>
</ul>
</div>
<center>
<table width="584" height="641" border="1">
  <tr>
    <td height="161" colspan="2">&nbsp;<?php echo "<img alt='image not upload' src='image/$name/$file' height='150' width='200'/>";?></td>
  </tr>
  <tr>
    <td height="46" colspan="2">&nbsp; <?php echo $fnam."    ".$lnam; ?></td>
  </tr>
  <tr>
    <td width="285" height="46">USER NAME : </td>
    <td width="283" height="46">&nbsp; <?php echo $usnam;?></td>
  </tr>
  
  
  <tr>
    <td>PARENT ID : </td>
    <td height="40">&nbsp;<?php echo $par_id;?></td>
  </tr>
  
  <tr>
    <td>STUDENT ID : </td>
    <td height="40">&nbsp;<?php echo $st_id;?></td>
  </tr>
  <tr>
    <td>RELATION : </td>
    <td height="40">&nbsp;<?php echo $rel;?></td>
  </tr>
  
  <tr>
    <td>ADDRESS  : </td>
    <td height="40">&nbsp;<?php echo $adds;?></td>
  </tr>
  <tr>
    <td>MOBILE NO : </td>
    <td height="40">&nbsp;<?php echo $pmob;?></td>
  </tr>
  
  <tr>
    <td>E-MAIL : </td>
    <td height="40">&nbsp;<?php echo $email;?></td>
  </tr>
  <tr>
    <td>PRIVILEGE : </td>
    <td height="40">&nbsp;<?php echo $priv;?></td>
  </tr>
  <br>
   <button class="button" type="submit" value="sgn" name="sgn"/>LOGOUT</button>&nbsp;
</table>
<br><br>
</center>
</form>
</body>
</html>
