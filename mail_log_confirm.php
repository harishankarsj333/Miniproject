
<?php
// Start the session
session_start();
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Untitled Document</title>
<img src="image/cusat.jpg" align="texttop" height="301" width="1347" />
<link href="css/style.css" rel="stylesheet"/>
</head>

<body>
<?php

$id = $_REQUEST['id'];
$pwd = $_REQUEST['pwd'];

// Set session variables
$_SESSION["userid"] = $id;
$_SESSION["password"] = $pwd;



error_reporting(1);

include_once('connection.php');

if(isset($_POST['sign']))
{   
   
    $status = 0;
    
	if($id=="" || $pwd=="")
	{
	echo "FILL ALL FIELDS!!!";
	
	}
	else
	{   
	    $stu=mysql_query("SELECT * FROM student where usnam='{$id}'");
		
	    $row=mysql_fetch_object($stu);
		$sid=$row->usnam;
		$spass=$row->pas;
		if($sid==$id && $spass==$pwd)
		{
		
		//header('location:HomePage.php');
		header('Location: fac_mail_home.php');
		$status = 1;
        
        }
		
		$fac=mysql_query("SELECT * FROM faculty where us_nam='{$id}'");
	    $row=mysql_fetch_object($fac);
		$fid=$row->us_nam;
		$fpass=$row->pass;
		if($fid==$id && $fpass==$pwd)
		{
		
		//header('location:HomePage.php');
		header('Location: fac_mail_home.php');
		$status = 1;
        }
		
		$par=mysql_query("SELECT * FROM parent where usnam='{$id}'");
	    $row=mysql_fetch_object($par);
		$pid=$row->usnam;
		$ppass=$row->pass;
		if($pid==$id && $ppass==$pwd)
		{
		
		//header('location:HomePage.php');
		header('Location: fac_mail_home.php');
		$status = 1;
        }
		
		$gst=mysql_query("SELECT * FROM user_info where user_nam='{$id}'");
	    $row=mysql_fetch_object($gst);
		$gid=$row->user_nam;
		$gpass=$row->pass;
		if($gid==$id && $gpass==$pwd)
		{
		
		//header('location:HomePage.php');
		header('Location: fac_mail_home.php');
		$status = 1;
        }
		
		 if($status==0)
		{
		
		//header('location:HomePage.php');
		echo "INVALID USERNAME OR PASSWORD!!!";
		
        }
		
		
	}
	
}
?>
</body>
</html>
