<?php
// Start the session
session_start();
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Untitled Document</title>

<link href="css/style.css" rel="stylesheet"/>
<link href="css/submit.css" rel="stylesheet"/>
<link href="css/main.css" rel="stylesheet"/>

<?php
 include("header.php")
?>
</head>

<body >

<ul>
  <li><a href="home.php" >HOME</a></li>
</ul>

<div id="nav">

</div>

  <div class="box">
      <br><br>
	  <form method="post" action="logconfirm.php" class="elegant-aero">
	  <h1>Login</h1>
      <input type="text" class="textbox" name="id"  placeholder="Username"/><br><br>
	  
      <input type="password" class="textbox" name="pwd" placeholder="Password"/>&nbsp;
      
	  <button class="button" type="submit" value="SignIn" name="SignIn"/>SUBMIT</button>&nbsp;
 
	   <p>Not a member? <span> <a href="signup.php"> Sign Up </p> </span> </p>
	   </form>
    </div>
	<?php
	 // remove all session variables
        session_unset(); 

        // destroy the session 
        session_destroy();
	?>
</body>
</html>
