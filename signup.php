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

<body style="background-color:#66CCFF">
<div id="header">
<h1> SIGN UP PAGE </h1>
</div>
<ul>
  <li><a href="home.php">HOME</a></li>
  <li><a href="login.php">BACK</a></li>
</ul>

<div id="nav">

</div>
<br><br>
<form action="confirm.php" method="post" class="elegant-aero"">
<h1>SIGN UP AS:
        <span>Sign Up as one user</span>
    </h1>
<br>
<div>
Student<input name="radios" type="radio" value="student"/>&nbsp;&nbsp;
Faculty<input name="radios" type="radio" value="faculty"/>&nbsp;&nbsp;
Parent<input name="radios" type="radio" value="parent"/>&nbsp;&nbsp;
<br>
<br><br>
<button class="button" type="submit">SIGN UP</button>
</div>
</form>
</body>
</html>
