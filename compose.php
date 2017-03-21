<?php
// Start the session
session_start();
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<link href="css/style.css" rel="stylesheet"/>
<title>Untitled Document</title>
<link href="css/main.css" rel="stylesheet"/>
<link href="css/submit.css" rel="stylesheet"/>
<?php
 include("header.php")
?>
</head>

<body>
<?php
$con=mysqli_connect('localhost','root','','mailbox');
@$to=$_POST['to'];
@$sub=$_POST['sub'];
@$msg=$_POST['msg'];
date_default_timezone_set('Asia/Kolkata');
$dat = date('Y-m-d H:i');

@$file = $_FILES['file']['name'];


$id = $_SESSION['userid'];

if(@$_REQUEST['send'])
{
	if($to=="" || $sub=="" || $msg=="")
	{
	$err= "fill the related data first";
	}
	
	else
	{
	$q = "SELECT * FROM user_info where user_id = '".$to."'";
	$d = mysqli_query($con,$q);
	$row = mysqli_num_rows($d);
	
	if($row==1)
		{
		$q1 = "INSERT INTO user_mail value('','".$to."','".$id."','".$sub."','".$msg."','".$file."','".$dat."')";
		mysqli_query($con,$q1);
		//mkdir("image/$to");
        move_uploaded_file($_FILES["file"]["tmp_name"], "image/$to/" . $_FILES["file"]["name"]);
		$err= "message sent...";
		//header("Location: fac_mail_home.php");
		}
	else
		{
		
		$q3 = "INSERT INTO user_mail value('','".$id."','".$id."','".$sub."','".$msg."','".$file."','".$dat."')";
		mysqli_query($con,$q3);
		
		$err= "message sent...";
        //header("Location: fac_mail_home.php");
		}	
	}
}	


if(@$_REQUEST['save'])
{
	if($sub=="" || $msg=="")
	{
	$err= "<font color='red'>fill subject and msg first</font>";
	}
	
	else
	{
	$q2 = "INSERT INTO draft values('','".$id."','".$sub."','".$file."','".$msg."','".$dat."')";
	mysqli_query($con,$q2);
	move_uploaded_file($_FILES["file"]["tmp_name"], "image/$to/" . $_FILES["file"]["name"]);
	$err= "message saved...";
	}
}	
 //header("Location: fac_mail_home.php");
	
?>

    <head>
	<style>
	input[type=text]
	{
	width:200px;
	height:35px;
	}
	</style>
</head>
<body>
<form method="post" enctype="multipart/form-data" class="elegant-aero">
<div id="header">
<h1> COMPOSE </h1>
</div>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<input type="reset" value="HOME" class="button" onclick="window.location.href='fac_mail_home.php'"/>
<center>
<table width="506" border="1">
  <?php echo @$err; ?>
  <tr>
    <th width="213" height="35" scope="row">To</th>
    <td width="277">
	<input type="text" name="to" />	
	
   </td>
  </tr>
  <tr>
    <th height="36" scope="row">Cc</th>
    <td><input type="text" name="cc"/></td>
  </tr>
  <tr>
    <th height="36" scope="row">Subject</th>
    <td><input type="text" name="sub" /></td>
  </tr>
  <tr>
    <th height="36" scope="row">upload your file</th>
    <td><input type="file" name="file" id="file"/></td>
  </tr>
  <tr>
    <th height="52" scope="row">Msg</th>
    <td><textarea rows="8" cols="40" name="msg"></textarea></td>
  </tr>
  <tr>
    <th height="35" colspan="2" scope="row">
	<input type="submit" name="send"  value="Send" class="button"/>
	&nbsp;&nbsp;<input type="submit" name="save" value="Save" class="button"/>
	&nbsp;&nbsp;<input type="reset" value="Cancel" class="button" onclick="window.location.href='fac_mail_home.php'"/>	</th>
  </tr>
</table>

</body>
</center>
</form>
</html>

</body>
</html>
