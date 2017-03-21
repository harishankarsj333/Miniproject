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
<form action="parent_insert.php" method="post" enctype="multipart/form-data" class="elegant-aero">
<h1>Parent Sign Up Form
        <span>Please fill all the texts in the fields.</span>
    </h1>

<strong style="font-family:"Courier New", Courier, monospace>Name</strong><br>
<input type="text" name="fnam" placeholder="first name"/>&nbsp;&nbsp;&nbsp;&nbsp
<input type="text" name="lnam" placeholder="last name"/><br><br>


<strong style="font-family:"Courier New", Courier, monospace>Parent's ID<sup>*</sup></strong>
<input type="text" name="par_id" placeholder="Parents_ID"/><br><br>


<strong style="font-family:"Courier New", Courier, monospace>Student's ID</strong>
<input type="text" name="st_id" placeholder="Student_ID"/><br><br>

<strong style="font-family:"Courier New", Courier, monospace>Relationship</strong>
<select name="rel">
  <option value=" ">-select-</option>
  <option value="Father">Father</option>
  <option value="Mother">Mother</option>
  <option value="Uncle">Uncle</option>
  <option value="Aunt">Aunt</option>
  <option value="Brother">Brother</option>
  <option value="Sister">Sister</option>
  <option value="Others">Others</option>
</select><br><br>

<strong style="font-family:"Courier New", Courier, monospace>Username</strong>
<input type="text" name="usnam" placeholder="Username"/><br><br>

<strong style="font-family:"Courier New", Courier, monospace>Password</strong>
<input type="password" name="pass" placeholder="Password"/><br><br>

<strong style="font-family:"Courier New", Courier, monospace>Confirm your password</strong>
<input type="password" name="rpass" placeholder="Re enter your password"/><br><br>

<strong style="font-family:"Courier New", Courier, monospace>Home Address</strong><br>
<textarea name="adds" rows="5" cols="50"/></textarea><br><br>

<strong style="font-family:"Courier New", Courier, monospace>Contact Number</strong>
<input type="text" name="pmob" placeholder="Contact no"/><br><br>

<strong style="font-family:"Courier New", Courier, monospace>E-mail</strong>
<input type="text" name="email" placeholder="e-mail"/><br><br>



<strong style="font-family:"Courier New", Courier, monospace>Upload Photo:</strong>
<input type="file" name="f2" id="f2"/><br><br>

* Parents ID must begin with P followed by Student's ID <br><br>


<button class="button" type="submit">SIGNUP</button>

</div>
</div>
<div class="footer">&nbsp;</div>
</form>

</body>
</html>
