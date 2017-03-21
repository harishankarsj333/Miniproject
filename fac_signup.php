<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Untitled Document</title>
<link href="css/nav_signup.css" rel="stylesheet"/>
<link href="css/submit.css" rel="stylesheet"/>

<link href="css/style.css" rel="stylesheet"/>
<link href="css/main.css" rel="stylesheet"/>

<?php
 include("header.php")
?>
</head>

<body style="background-color:#A6FFFF>
<div id="header">
<h1>FACULTY SIGN UP PAGE</h1>
</div>
<ul>
  <li><a href="home.php">HOME</a></li>
   <li><a href="signup.php">BACK</a></li>
</ul>

<div id="nav">

</div>

<div class="class_head">&nbsp;</div>

<div class="content">
<div class="box">
<form action="fac_insert.php" method="post" enctype="multipart/form-data" class="elegant-aero">
<h1>Faculty Sign Up Form
        <span>Please fill all the texts in the fields.</span>
    </h1>
<strong style="font-family:"Courier New", Courier, monospace>Name</strong><br>
<input type="text" name="fnam" placeholder="first name" /> &nbsp;&nbsp;
<input type="text" name="lnam" placeholder="last name" /><br><br>

<strong style="font-family:"Courier New", Courier, monospace>Date Of Joining</strong> 
<input type="date" name="dd" placeholder="DD" /><br><br>


<strong style="font-family:"Courier New", Courier, monospace>Gender</strong>
<select name="gender">
  <option value=" ">-select-</option>
  <option value="M">Male</option>
  <option value="F">Female</option>
  <option value="O">Others</option>
</select>
<br><br>

<strong style="font-family:"Courier New", Courier, monospace>Age</strong>
<input type="text" name="age" placeholder="Age" /><br><br>

<strong style="font-family:"Courier New", Courier, monospace>Qualification</strong>
<select name="qual">
  <option value=" ">-select-</option>
  <option value="M.Tech">M.Tech</option>
  <option value="Phd">Phd</option>
</select>
<br><br>

<strong style="font-family:"Courier New", Courier, monospace>Designation</strong>
<select name="designation">
  <option value=" ">-select-</option>
  <option value="Professor">Professor</option>
  <option value="Assistant Professor">Assistant Professor</option>
  <option value="Associate Professor">Associate Professor</option>
  <option value="Permanent Faculty">Permanent Faculty</option>
  <option value="Guest Lucturer">Guest Lucturer</option>
</select>
<br><br>

<strong style="font-family:"Courier New", Courier, monospace>Username</strong>
<input type="text" name="usnam" placeholder="Username" /><br><br>

<strong style="font-family:"Courier New", Courier, monospace>Password</strong>
<input type="password" name="pass" placeholder="Password" /><br><br>

 

<strong style="font-family:"Courier New", Courier, monospace>Confirm your Password</strong>
<input type="password" name="rpass" placeholder="Re-enter" /><br><br>

<strong style="font-family:"Courier New", Courier, monospace>Faculty ID<sup>*</sup></strong>&nbsp;
<input type="text" name="fac_id" placeholder="ID" /><br><br>



<strong style="font-family:"Courier New", Courier, monospace>Mobile Number</strong>
<input type="text" name="f_mob" placeholder="Mob No" /><br><br>

<strong style="font-family:"Courier New", Courier, monospace>E-mail Address</strong>
<input type="text" name="email" placeholder="E-mail" /><br><br>

<strong style="font-family:"Courier New", Courier, monospace> Official Address </strong><br>
<textarea name="add" rows="5" cols="50"/></textarea><br><br>

<strong style="font-family:"Courier New", Courier, monospace> Home Address </strong><br>
<textarea name="addhom" rows="5" cols="50"/></textarea><br><br> 

<strong style="font-family:"Courier New", Courier, monospace>Upload Photo:</strong>
<input type="file" name="f3"/><br><br>

* Faculty ID must begin with F followed by username <br><br>
<button class="button" type="submit">SIGNUP</button>
</div>




</form>
</body>
</html>
