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
?>
<?php


 if(isset($_POST['view']))
 header("Location: int_view.php");
 
 else if(isset($_POST['insert']))
  header("Location: int_insert.php");
  
  else if(isset($_POST['update']))
  header("Location: int_update.php");
  
   else if(isset($_POST['back']))
  header("Location: fachome.php");
  
  else if(isset($_POST['delete']))
  header("Location: int_delete.php");
  
    else if(isset($_POST['pdf']))
  header("Location: att_pdf.php");
  
  
 
  
?>
</form>
</body>
</html>
