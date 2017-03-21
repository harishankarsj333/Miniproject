<?php
// Start the session
session_start();
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Untitled Document</title>
</head>

<body>
<form method="post">
<?php
 $subnam = $_REQUEST['subname'];
 $_SESSION['sub_nam'] = $subnam ;
 $my_html = $_REQUEST["my_html"];
 $_SESSION['myhtml'] = $my_html;
?>
<?php


 if(isset($_POST['view']))
 header("Location: att_view.php");
 
 else if(isset($_POST['insert']))
  header("Location: att_insert.php");
  
  else if(isset($_POST['update']))
  header("Location: att_update.php");
  
   else if(isset($_POST['back']))
  header("Location: fachome.php");
  
  else if(isset($_POST['delete']))
  header("Location: att_delete.php");
  
  else if(isset($_POST['below']))
  header("Location: att_below.php");
  
  else if(isset($_POST['average']))
  header("Location: att_average.php");
  

  
?>
</form>
</body>
</html>
