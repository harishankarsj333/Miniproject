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
<?php
if(isset($_POST['logout']))
{ 
  header('Location: mail.php'); 
  }
if(isset($_POST['compose']))
{ 
  header('Location: compose.php'); 
  }
if(isset($_POST['sent']))
{ 
  header('Location: sent.php'); 
  }
if(isset($_POST['imp']))
{ 
  header('Location: imp.php'); 
  }
 if(isset($_POST['inbox']))
{ 
  header('Location: inbox.php'); 
  }
  if(isset($_POST['trash']))
{ 
  header('Location: trash.php'); 
  }
 if(isset($_POST['draft']))
{ 
  header('Location: draft.php'); 
  }
?>  
</body>
</html>
