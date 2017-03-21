<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Untitled Document</title>
<link href="css/nav_signup.css" rel="stylesheet"/>
<link href="css/submit.css" rel="stylesheet"/>
<link href="css/main.css" rel="stylesheet"/>

<?php
 include("header.php")
?>
</head>

<body style="background-color:#A6FFFF>

<div id="header">
</div>
<ul>
  <li><a href="home.php">HOME</a></li>
   <li><a href="signup.php">BACK</a></li>
</ul>

<div id="nav">

</div>

<div class="class_head">&nbsp;</div>

<div class="content">
<div class="class_head">&nbsp;</div>
<div class="content">
<div class="box">
<form action="guest_insert.php" method="post" enctype="multipart/form-data" class="elegant-aero">
<h1>Guest Sign Up Form
        <span>Please fill all the texts in the fields.</span>
    </h1>

<strong style="font-family:"Courier New", Courier, monospace>Name</strong>
<input type="text" name="nam" placeholder="Name"/>&nbsp;&nbsp;&nbsp;&nbsp<br><br>

<strong style="font-family:"Courier New", Courier, monospace>Username</strong>
<input type="text" name="usnam" placeholder="Username"/><br><br>

<strong style="font-family:"Courier New", Courier, monospace>Password</strong>
<input type="password" name="pass" placeholder="Password"/><br><br>

<strong style="font-family:"Courier New", Courier, monospace>Confirm your password</strong>
<input type="password" name="rpass" placeholder="Re enter your password"/><br><br>

<strong style="font-family:"Courier New", Courier, monospace>Gender</strong>
<select name="gender">
  <option value=" ">-select-</option>
  <option value="M">Male</option>
  <option value="F">Female</option>
  <option value="O">Others</option>
</select>
<br><br>

<strong style="font-family:"Courier New", Courier, monospace>Birthday</strong><br>
<input type="date" name="bday" placeholder="DD"/><br><br>

<strong style="font-family:"Courier New", Courier, monospace>Hobby</strong>
<input type="text" name="hobby" placeholder="hobby"/><br><br>


<strong style="font-family:"Courier New", Courier, monospace>Contact Number</strong>
<input type="text" name="mob" placeholder="Contact no"/><br><br>

<strong style="font-family:"Courier New", Courier, monospace>E-mail</strong>
<input type="text" name="email" placeholder="e-mail"/><br><br>


<strong style="font-family:"Courier New", Courier, monospace>Upload Photo:</strong>
<input type="file" name="f5" id="f5"/><br><br>


<button class="button" type="submit">SIGNUP</button>

</div>
</div>
<div class="footer">&nbsp;</div>
</form>

</body>
</html>
